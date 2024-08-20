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
       return view('backend.applications.visa_application',compact('visa_types'));
    }

    public function index(){
        $usa =UsaPersonalInformation::with('applicant')->get();
        $schengen =SchengenPersonalInformation::with('applicant','additional_information','allocated_user')->get();
        $users =User::get();
        return view('backend.applications.list',compact('usa','schengen','users'));
    }

    public function create($visa_id){
        $questions =Question::where('visa_type_id',$visa_id)->get();
        return view('backend.applications.add',compact('questions','visa_id'));
    }

    public function visaProfile(Request $request){
        $id =$request->personal_id;
        $type =$request->type;
        if ($type == 1) {
            $profile =UsaPersonalInformation::with('applicant')->where('id',$id)->first();
        } else {
            $profile =SchengenPersonalInformation::with('applicant','additional_information','task_tracks','active_track')->first();
        }  
        // return $profile->task_tracks;
        return view('backend.applications.schengen_profile',compact('profile'));
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

    public function usaVisaStore(UsaFormRequest $request){
        $valid =$request->validated();

        try {
           $id= DB::transaction(function() use ($valid,$request){

                $personal =UsaPersonalInformation::create([
                    'applicant_id'      =>Auth::user()->id,
                    'uuid'              =>(string)Str::orderedUuid(),
                    'application_stage' =>0,
                    'maritial_status'      =>$valid['maritial_status'],
                    'passport_held'      =>$valid['passport_held'],
                    'permanent_residence'      =>$valid['permanent_residence'],
                    'home_country'      =>$valid['home_country'],
                    'home_city'      =>$valid['home_city'],
                    'home_street'      =>$valid['home_street'],
                    'primary_email'      =>$valid['primary_email'],
                    'primary_phone_number'      =>$valid['primary_phone_number'],
                    'stolen_passport'      =>$valid['stolen_passport'],
                    'purpose_of_trip'      =>$valid['purpose_of_trip'],
                    'arrival_date'      =>$valid['arrival_date'],
                    'departure_date'      =>$valid['departure_date'],
                    'arrival_city'      =>$valid['arrival_city'],
                    'street'      =>$valid['street'],
                    'postal_code'      =>$valid['postal_code'],
                    'insurance'      =>$valid['insurance'],
                    'insurance_name'      =>$valid['insurance_name'],
                    // 'passport'      =>$valid['passport'],
                    'other_people_travel'      =>$valid['other_people_travel'],
                    'have_been_us'      =>$valid['have_been_us'],
                    'have_you_own_us_visa'      =>$valid['have_you_own_us_visa'],
                    'refused_us_visa'      =>$valid['refused_us_visa'],
                    'clan'      =>$valid['clan'],
                    'languages'      =>json_encode($valid['languages']),
                    'visited_city'      =>json_encode($valid['visited_city']),
                    'specialized_skill'      =>$valid['specialized_skill'],
                    'social_contribution'      =>$valid['social_contribution'],
                    'served_military'      =>$valid['served_military'],
                    'application_stage'    =>0,

                ]);

                if ($valid['payer_name'] || $valid['payer_phone_number']){
                    $payer =UsaTripPayer::create([
                        'payer_name'=>$valid['payer_name'],
                        'payer_phone_number'=>$valid['payer_phone_number'],
                        'payer_email'=>$valid['payer_email'],
                        'payer_relationship'=>$valid['payer_relationship'],
                        'address_equality'=>$valid['address_equality'],
                        'payer_street_address'=>$valid['payer_street_address'],
                        'payer_city'=>$valid['payer_city'],
                        'payer_state'=>$valid['payer_state'],
                        'payer_postal_code'=>$valid['payer_postal_code'],
                        'payer_country'=>$valid['payer_country'],
                        'uuid'              =>(string)Str::orderedUuid(),
                        'personal_information_id' =>$personal->id
                    ]); 
                }
                
                if ($request['us_contact_person'] || $request['us_contact_address']) {
                    $hotel =UsaHotelDetail::create([
                        'us_contact_person'=>$request['us_contact_person'],
                        'us_contact_address'=>$request['us_contact_address'],
                        'us_contact_organization'=>$request['us_contact_organization'],
                        'us_contact_relationship'=>$request['us_contact_relationship'],
                        'us_contact_phone'=>$request['us_contact_phone'],
                        'us_contact_email'=>$request['us_contact_email'],
                        'uuid'              =>(string)Str::orderedUuid(),
                        'personal_information_id' =>$personal->id
                    ]);
                }
                if ($valid['father_surname'] || $valid['mother_surname']) {
                    $familiy =UsaFamilyInformation::create([
                        'father_surname'=>$valid['father_surname'],
                        'father_given_name'=>$valid['father_given_name'],
                       'father_dob'=>$valid['father_dob'],
                        'is_father_in_us'=>$valid['is_father_in_us'],
                        'mother_surname'=>$valid['mother_surname'],
                        'mother_name'=>$valid['mother_name'],
                        'mother_dob'=>$valid['mother_dob'],
                        'is_mother_in_us'=>$valid['is_mother_in_us'],
                        'other_imemediate_relative_in_us'=>$valid['other_imemediate_relative_in_us'],
                        'other_relative_in_us'=>$valid['other_relative_in_us'],
                        'spouse_name'=>$valid['spouse_name'],
                       'spouse_dob'=>$valid['spouse_dob'],
                        'spouse_nationality'=>$valid['spouse_nationality'],
                        'spouse_city'=>$valid['spouse_city'],
                        'spouse_origin'=>$valid['spouse_origin'],
                        'spouse_address'=>$valid['spouse_address'],
                        'uuid'              =>(string)Str::orderedUuid(),
                        'personal_information_id' =>$personal->id
                    ]);
                }
                if($valid['primary_occupation'] || $valid['college_name']){

                $education =UsaEducationInformation::create([
                    'primary_occupation'=>$valid['primary_occupation'],
                    'present_employer'=>$valid['present_employer'],
                    'employer_duties'=>$valid['employer_duties'],
                    'employer_phone_number'=>$valid['employer_phone_number'],
                    'monthly_salary'=>$valid['monthly_salary'],
                     'previously_employed'=>$valid['previously_employed'],
                     'duties'=>$valid['duties'],
                    'college_name'=>$valid['college_name'],
                    'college_address'=>$valid['college_address'],
                    'uuid'              =>(string)Str::orderedUuid(),
                    'personal_information_id' =>$personal->id
                ]);

               }

                if ($request->hasFile('passport')) {
                    $personal->passport =$this->importFile($request->file('passport'),Auth::user()->name.'_'.$personal->uuid);
                    $personal->save();
                }

                return $personal->id;

            });
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'success' =>true,
                'errors'  =>$th->getMessage()
            ],500);
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully',
            'personal_id' =>$id
        ],200);
    }

    public function SchengenVisaStore(SchengenFormRequest $request){
        $valid =$request->validated();

        try {
           $id= DB::transaction(function() use ($valid,$request){
                $personal =SchengenPersonalInformation::create([
                    'maritial_status'=>$valid['maritial_status'],
                    'gender'=>$valid['gender'],
                    'dob'=>$valid['dob'],
                    'place_of_birth'=>$valid['place_of_birth'],
                    'country_of_birth'=>$valid['country_of_birth'],
                    'current_nationality'=>$valid['current_nationality'],
                    'nin'=>$valid['nin'],
                    'home_address'=>$valid['home_address'],
                    'email'=>$valid['email'],
                    'phone_number'=>$valid['phone_number'],
                    'other_residence'=>$valid['other_residence'],
                    'residence_number'=>$valid['residence_number'],
                    'residence_valid'=>$valid['residence_valid'],
                    'purpose_of_journey'=>$valid['purpose_of_journey'],
                    'residence_valid'=>$valid['residence_valid'], 
                    'applicant_id'      =>Auth::user()->id,
                    'uuid'              =>(string)Str::orderedUuid(),
                    'application_stage' =>0,
                ]);

                $information =SchengenAdditionalInformation::create([
                    'travel_document'=>$valid['travel_document'],
                    'no_of_travel_document'=>$valid['no_of_travel_document'],
                    'date_issue'=>$valid['date_issue'],
                    'validity'=>$valid['validity'],
                    'issued_by'=>$valid['issued_by'],
                    'current_occupation'=>$valid['current_occupation'],
                    'employer_address'=>$valid['employer_address'],
                    'member_state'=>$valid['member_state'],
                    'member_state_entry'=>$valid['member_state_entry'],
                    'entry_requested'=>$valid['entry_requested'],
                    'duration'=>$valid['duration'],
                    'visa_issue_before'=>$valid['visa_issue_before'],
                    'date_from'=>$valid['date_from'],
                    'date_to'=>$valid['date_to'],
                    'fingerprint'=>$valid['fingerprint'],
                    'collection_date'=>$valid['collection_date'],
                    'permit_issuer'=>$valid['permit_issuer'],
                    'valid_from'=>$valid['valid_from'],
                    'valid_to'=>$valid['valid_to'],
                    'arrival_date'=>$valid['arrival_date'],
                    'departure_date'=>$valid['departure_date'],
                    'inviting_person'=>$valid['inviting_person'],
                    'inviting_person_address'=>$valid['inviting_person_address'],
                    'inviting_company'=>$valid['inviting_company'],
                    'inviting_company_address'=>$valid['inviting_company_address'],
                    'company_personel'=>$valid['company_personel'],
                    'cost_of_travel'=>$valid['cost_of_travel'],
                    'family_surname'=>$valid['family_surname'],
                    'family_firstname'=>$valid['family_firstname'],
                    'family_dob'=>$valid['family_dob'],
                    'family_nationality'=>$valid['family_nationality'],
                    'family_nin'=>$valid['family_nin'],
                    'family_relationship'=>$valid['family_relationship'],
                    'uuid'              =>(string)Str::orderedUuid(),
                    'schengen_personal_information_id' =>$personal->id
                ]);

                return $personal->id;

            });
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'success' =>true,
                'errors'  =>$th->getMessage()
            ],500);
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully',
            'personal_id' =>$id
        ],200);
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
           
            try {
                DB::transaction(function() use ($request){
                    $applications =$request->application;
                    $user_id      =$request->user_id;
                    $comment      =$request->comment;
                    $visa_type    =$request->visa_type;

                    foreach ($applications as $key ) {
                        $inputs =[
                            'resource_type' =>$visa_type,
                            'status' =>1,
                            'comment' =>$comment,
                            'received_date' =>Carbon::now(),
                        ];
                        switch ($visa_type ) {
                            case 1:
                                # code...
                                break;
                            case 2:
                                $personal =SchengenPersonalInformation::find($key);
                                if ($personal) {
                                    $personal->allocated =$user_id;
                                    $personal->assignor  =Auth::user()->id;
                                    $personal->application_stage =1;
                                    $personal->save();
        
                                    // create track 
                                    $inputs['resource_id'] =$personal->id;
                                    $inputs['status'] =1;
                                    $inputs['action'] ="Forward";
                                    $inputs['user_id'] =Auth::user()->id;
                                    $this->createTrack($inputs);
        
                                    // second track for data entry
                                    $inputs['resource_id'] =$personal->id;
                                    $inputs['status'] =0;
                                    $inputs['user_id'] =$user_id;
                                    $inputs['comment'] =null;
                                    $inputs['action']  ="Pending";
                                    $this->createTrack($inputs);
        
                                }
                                break;
                            
                            default:
                                # code...
                                break;
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
        // dd($request->all());
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
                        $application =QuestionAnswer::create([
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
