<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PaidService;
use App\Models\PaidServiceForm;
use App\Models\PaidServicePrice;
use App\Models\Question;
use App\Models\VisaType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Str;

class VisaManagementController extends Controller
{
    public function index(){
        $visa_types =VisaType::get();
        return view('backend.other_pages.visa_types_list',compact('visa_types'));

    }

    public function paidService(){
        $services =PaidService::get();
        return view('backend.other_pages.paid_service_list',compact('services'));
    }

    public function questionList($visa_type_id){
        $questions =Question::where('visa_type_id',$visa_type_id)->get();
        return view('backend.other_pages.question_list',compact('visa_type_id','questions'));
    }

    public function questionCreate(){
        return view('backend.other_pages.question_add');
    }

    public function paidServicePlan($paid_service_uuid){
        $paid_service =PaidService::where('uuid',$paid_service_uuid)->first();
        $services =PaidServicePrice::where('paid_service_id',$paid_service->id)->get();
        return view('backend.other_pages.paid_service_plan',compact('services','paid_service_uuid'));
    }

    public function paidServicePlanQuestions($paid_plan_uuid){
        $PaidServicePrice =PaidServicePrice::where('uuid',$paid_plan_uuid)->first();
        $questions =PaidServiceForm::where('paid_service_price_id',$PaidServicePrice->id)->get();
        return view('backend.other_pages.paid_service_questions',compact('questions','paid_plan_uuid'));
    }

    public function visaStore(Request $request){
        $valid =$request->validate([
            'name'          =>'required',
            'price'          =>'required',
            'description'   =>'required',
        ]);

        VisaType::create([
            'description' =>$valid['description'],
            'name'        =>$valid['name'],
            'price'       =>$valid['price'],
            'status'      =>true,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);
    }

    public function questionStore(Request $request){
        $valid =$request->validate([
            'name'           =>'required',
            'rule'           =>'required',
            'input'           =>'required',
            'visa_type_id'    =>'required',
            // 'options'         =>'required',
            'arrangement'     =>'required',
            'section'     =>'required',
        ]);

        Question::create([
            'visa_type_id'  =>$valid['visa_type_id'],
            'name'          =>$valid['name'],
            'rule'          =>$valid['rule'],
            'section'       =>$valid['section'],
            'input_type'    =>$valid['input'],
            'arrangement'   =>$valid['arrangement'],
            'options'       =>$request['options'] ?? null,
            'uuid'           =>(string)Str::orderedUuid(),
            'created_by'     =>Auth::user()->id,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);  
    }

    public function visaTypeUpdate(Request $request){
        $valid =$request->validate([
            'name'          =>'required',
            'price'          =>'required',
            'description'   =>'required',
            'id'   =>'required',
        ]);

        VisaType::updateOrCreate(
            [
                'id' =>$valid['id']
            ],[
            'description' =>$valid['description'],
            'name'        =>$valid['name'],
            'price'       =>$valid['price'],
            'status'      =>true,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]); 
    }

    public function visaTypeDestroy(Request $request){
        $id =$request->id;
        
        VisaType::where('id',$id)->delete();

        Question::where('visa_type_id',$id)->delete();

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]); 
    }

    public function questionUpdate(Request $request){
        $valid =$request->validate([
            'name'           =>'required',
            'rule'           =>'required',
            'input'           =>'required',
            'arrangement'     =>'required',
            'section'     =>'required',
            'uuid'       =>'required',
        ]);

        Question::updateOrCreate(
            [
                'uuid' =>$valid['uuid']
            ],
            [
            'name'          =>$valid['name'],
            'rule'          =>$valid['rule'],
            'section'       =>$valid['section'],
            'input_type'    =>$valid['input'],
            'arrangement'   =>$valid['arrangement'],
            'options'       =>$request['options'] ?? null,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);   
    }

    public function questionDestroy(Request $request){
        $uuid =$request->uuid;

        Question::where('uuid',$uuid)->delete();

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200); 
    }

    public function serviceQuestionDestroy(Request $request){
        $uuid =$request->uuid;

        PaidServiceForm::where('uuid',$uuid)->delete();

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200); 
    }

    public function paidServiceStore(Request $request){
        $valid =$request->validate([
            'name'          =>'required',
            'description'   =>'required',
        ]);

        PaidService::create([
            'description' =>$valid['description'],
            'name'        =>$valid['name'],
            'uuid'       =>(string)Str::orderedUuid(),
            'created_by'  =>Auth::user()->id
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]); 
    }

    public function paidServiceUpdate(Request $request){
        $valid =$request->validate([
            'name'          =>'required|unique:paid_services,name',
            'description'   =>'required',
            'id'   =>'required',
        ]);

        PaidService::updateOrCreate(
            [
                'uuid' =>$valid['id']
            ],[
            'description' =>$valid['description'],
            'name'        =>$valid['name'],
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);   
    }

    public function paidServiceDestroy(Request $request){
        $uuid =$request->uuid;

        PaidService::where('uuid',$uuid)->delete();

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200); 
    }

    public function paidServicePlanDestroy(Request $request){
        $uuid =$request->uuid;

        PaidServicePrice::where('uuid',$uuid)->delete();

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200); 
    }

    public function paidServicePlanStore(Request $request){
        $valid =$request->validate([
            'name'          =>'required',
            'price'          =>'required',
            'offers'          =>'required',
        ]);


        $paid_service =PaidService::where('uuid',$request['paid_service_uuid'])->first();

        PaidServicePrice::create([
            'offers'       =>$valid['offers'],
            'name'         =>$valid['name'],
            'price'        =>$request['price'],
            'paid_service_id'  =>$paid_service->id,
            'uuid'             =>(string)Str::orderedUuid(),
            'created_by'       =>Auth::user()->id
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]); 
    }

    public function paidServicePlanUpdate(Request $request){
        $valid =$request->validate([
            'name'          =>'required',
            'offers'   =>'required',
            'uuid'   =>'required',
        ]);

        PaidServicePrice::updateOrCreate(
            [
                'uuid' =>$valid['uuid']
            ],[
            'offers'       =>$valid['offers'],
            'name'         =>$valid['name'],
            'price'        =>$request['price'],
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);   
    }

    public function serviceQuestionStore(Request $request){
        $valid =$request->validate([
            'name'           =>'required',
            'rule'           =>'required',
            'input'           =>'required',
            'paid_plan_uuid'    =>'required',
            'arrangement'     =>'required',
        ]);

        $price_plan =PaidServicePrice::where('uuid',$request['paid_plan_uuid'])->first();

        PaidServiceForm::create([
            'name'          =>$valid['name'],
            'rule'          =>$valid['rule'],
            'input_type'    =>$valid['input'],
            'arrangement'   =>$valid['arrangement'],
            'options'       =>$request['options'] ?? null,
            'uuid'           =>(string)Str::orderedUuid(),
            'created_by'     =>Auth::user()->id,
            'paid_service_id'       =>$price_plan->paid_service_id,
            'paid_service_price_id' =>$price_plan->id,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);  
    }

    public function serviceQuestionUpdate(Request $request){
        $valid =$request->validate([
            'name'           =>'required',
            'rule'           =>'required',
            'input'           =>'required',
            'arrangement'     =>'required',
            'uuid'       =>'required',
        ]);

        PaidServiceForm::updateOrCreate(
            [
                'uuid' =>$valid['uuid']
            ],
            [
            'name'          =>$valid['name'],
            'rule'          =>$valid['rule'],
            'input_type'    =>$valid['input'],
            'arrangement'   =>$valid['arrangement'],
            'options'       =>$request['options'] ?? null,
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);   
    }
}
