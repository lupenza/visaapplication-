<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchengenFormRequest;
use App\Http\Requests\UsaFormRequest;
use App\Models\PaymentLog;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\SchengenAdditionalInformation;
use App\Models\SchengenPersonalInformation;
use App\Models\TaskTrack;
use App\Models\UsaEducationInformation;
use App\Models\UsaFamilyInformation;
use App\Models\UsaHotelDetail;
use App\Models\UsaPersonalInformation;
use App\Models\UsaTripPayer;
use App\Models\User;
use App\Models\VisaApplication;
use App\Models\VisaType;
use App\Traits\FileImportTrait;
use App\Traits\PaymentTrait;
use App\Traits\TaskTrackTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Str;

class ApplicationController extends Controller
{
    use FileImportTrait,PaymentTrait,TaskTrackTrait;

    public function visaApplication(){
        $visa_types =VisaType::get();
        $applications =VisaApplication::with('applicant','visa_type','allocated_user')->get();
        $users =User::get();
       return view('backend.applications.visa_application',compact('visa_types','applications','users'));
    }

    public function create($visa_id){
        $questions =Question::where('visa_type_id',$visa_id)->get();
        if (empty($questions->count())) {
            return redirect()->back()->with('message', 'Question Not Uploaded Yet');
        }
        return view('backend.applications.add',compact('questions','visa_id'));
    }

    public function visaProfile(Request $request){
        $uuid =$request->uuid;
        $profile =VisaApplication::with('question_answers','question_answers.question','visa_type','allocated_user','task_tracks','active_track')->where('uuid',$uuid)->first();
        return view('backend.applications.profile',compact('profile'));
    }

    public function paymentProfile($id,$type){
            $data =[];
            $data['personal_id'] =$id;
            $data['type']        =$type;
        if ($type == 1) {
            $usa =UsaPersonalInformation::with('applicant')->where('id',$id)->first();
            $data['name'] =$usa->applicant?->name;
            $data['visa_type'] ="American Visa";
            $data['arrival_date'] =$usa->arrival_date;
            $data['departure_date'] =$usa->departure_date;
            $data['amount'] ='150,000';
        } else {
            $schengen =SchengenPersonalInformation::with('applicant','additional_information')->first();

            $data['name'] =$schengen->applicant?->name;
            $data['visa_type'] ="Schengen Visa";
            $data['arrival_date'] =$schengen->additional_information?->arrival_date;
            $data['departure_date'] =$schengen->additional_information?->departure_date;
            $data['amount'] ='200,000'; 
        }
        return view('backend.applications.payment_summary',compact('data'));
    }

    public function processPayment(Request $request){
        $id =$request->personal_id;
        $type =$request->type;
        $data =[];
        $data['id'] =$id;
        $data['type']        =$type;
        if ($type == 1) {
            $personal =UsaPersonalInformation::with('applicant')->where('id',$id)->first();
            $data['amount'] ='150000';
        } else {
            $personal =SchengenPersonalInformation::with('applicant','additional_information')->first();
            $data['amount'] ='200000'; 
        }  

        $payment_log =PaymentLog::create([
            'amount' =>$data['amount'],
            'external_id' =>(string)Str::orderedUuid(),
            'vendor_id' =>(string)Str::orderedUuid(),
            'uuid' =>(string)Str::orderedUuid(),
            'personal_id' =>$data['id'],
            'applicant' =>$personal->applicant_id,
            'visa_type' =>$data['type'],
        ]);
       // $payment_log =PaymentLog::first();
        $url = $this->checkOutPayment($payment_log);
        // return $url;
        return redirect()->away($url);
    }

    public function visaAllocation(Request $request){

        $request->validate([
            'application' =>'required',
            'user_id'     =>'required',
            'comment'     =>'required',
        ]);
           
            try {
                DB::transaction(function() use ($request){
                    $applications =$request->application;
                    $user_id      =$request->user_id;
                    $comment      =$request->comment;

                    foreach ($applications as $key ) {
                        $inputs =[
                            'resource_type' =>1,
                            'status' =>1,
                            'comment' =>$comment,
                            'received_date' =>Carbon::now(),
                        ];

                        $visa_application =VisaApplication::find($key);
                        if ($visa_application) {
                            $visa_application->allocated =$user_id;
                            $visa_application->assignor  =Auth::user()->id;
                            $visa_application->application_stage =1;
                            $visa_application->assign_date =Carbon::now();
                            $visa_application->save();
                        }

                          // create track 
                          $inputs['resource_id'] =$visa_application->id;
                          $inputs['status'] =1;
                          $inputs['action'] ="Forward";
                          $inputs['user_id'] =Auth::user()->id;
                          $this->createTrack($inputs);

                          // second track for data entry
                          $inputs['resource_id'] =$visa_application->id;
                          $inputs['status'] =0;
                          $inputs['user_id'] =$user_id;
                          $inputs['comment'] =null;
                          $inputs['action']  ="Pending";
                          $this->createTrack($inputs);

                    }


                });
            } catch (\Throwable $th) {
                return response()->json([
                    'success' =>true,
                    'errors'  =>$th->getMessage()
                ],500);
            }

            return response()->json([
                'success' =>true,
                'message' =>'Action Done Successfully',
            ],200);

           
    }

    public function trackStore(Request $request){
        $valid =$request->validate([
            'comment'  =>'required',
            'action'   =>'required',
            'track_id'  =>'required',
        ]);

        $action =$valid['action'];
        

        if ($action == "Forward" || $action == 'Reverse') {
             // create track 
             // first update track
             $track =TaskTrack::find($valid['track_id']);
             $track->comment =$valid['comment'];
             $track->forward_date =Carbon::now();
             $track->status       =1;
             $track->action       =$valid['action'];
             $track->save();

             // create track
             $inputs =[
                'action'        =>"Pending",
                'resource_type' =>$track->resource_type,
                'status' =>0,
                'comment' =>null,
                'received_date' =>Carbon::now(),
                'resource_id'   =>$track->resource_id,
                'user_id'       =>$action == "Forward" ? $this->resourceData($track)->assignor : $this->resourceData($track)->allocated,
            ];

             $this->createTrack($inputs); 
        } else {
            // approve
            $track =TaskTrack::find($valid['track_id']);
            $track->comment     =$valid['comment'];
            $track->forward_date =Carbon::now();
            $track->status       =1;
            $track->action       =$valid['action'];
            $track->save();

            // Update 

            $data =$this->resourceData($track);
            $data->application_stage =2;
            $data->save();
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully',
        ],200);
        

    }

    public function visaStore(Request $request){
        try {
            DB::transaction(function() use ($request){
                  // inser visa application

                  $application =VisaApplication::create([
                    'applicant_id' =>Auth::user()->id,
                    'visa_type_id' =>$request['visa_type_id'],
                    'uuid' =>(string)Str::orderedUuid(),
                   ]);
                 $data = request()->all();

                foreach ($data as $key => $value) {
                    // answers
                    if (is_numeric($key)) {
                        QuestionAnswer::create([
                            'question_id' =>$key,
                            'answer'      =>$value,
                            'visa_application_id' =>$application->id,
                            'uuid' =>(string)Str::orderedUuid(),
                        ]);
                    }
                }

            });
        } catch (\Throwable $th) {
            return response()->json([
                'success' =>true,
                'errors'  =>$th->getMessage()
            ],500);
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully',
        ],200);
    }

    
}
