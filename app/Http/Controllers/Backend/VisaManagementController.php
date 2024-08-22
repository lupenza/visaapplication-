<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\VisaType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class VisaManagementController extends Controller
{
    public function index(){
        $visa_types =VisaType::get();
        return view('backend.other_pages.visa_types_list',compact('visa_types'));

    }

    public function questionList($visa_type_id){
        $questions =Question::where('visa_type_id',$visa_type_id)->get();
        return view('backend.other_pages.question_list',compact('visa_type_id','questions'));
    }

    public function questionCreate(){
        return view('backend.other_pages.question_add');
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
}
