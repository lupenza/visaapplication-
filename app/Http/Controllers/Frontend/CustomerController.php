<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\VisaApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        return view('frontend.customer.dashboard');
    }

    public function customerApplication(){
        $applications =VisaApplication::with('applicant','visa_type','allocated_user','service_plan','service_plan.service')
                        ->where('applicant_id',Auth::user()->id)
                        ->get();
        return view('frontend.customer.applications',compact('applications'));
    }

    public function customerProfile(Request $request){
        $uuid =$request->uuid;
        $profile =VisaApplication::with('question_answers','question_answers.question','visa_type','allocated_user','task_tracks','active_track')
                ->where('uuid',$uuid)
                ->first();
        return view('frontend.customer.profile',compact('profile'));

    }
}
