<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PaidServiceForm;
use App\Models\PaymentLog;
use App\Models\Question;
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
                        ->latest()
                        ->get();
        return view('frontend.customer.applications',compact('applications'));
    }

    public function customerProfile(Request $request){
        $uuid =$request->uuid;
        $profile =VisaApplication::with('question_answers','visa_type','allocated_user','task_tracks','active_track')
                ->where('uuid',$uuid)
                ->first();
        return view('frontend.customer.profile',compact('profile'));

    }

    public function customerPayments(){
        $payments =PaymentLog::where('applicant',Auth::user()->id)->get();
        return view('frontend.customer.payments',compact('payments'));
 
    }

    public function editApplication($uuid){
        $profile =VisaApplication::with('question_answers','visa_type','allocated_user','task_tracks','active_track')->where('uuid',$uuid)->first();
        if ($profile->application_type == 1) {
            $questions =Question::where('visa_type_id',$profile->visa_type_id)->get();
            return view('frontend.customer.edit_application',compact('questions','profile'));
        } else {
            $questions =PaidServiceForm::where('paid_service_price_id',$profile->paid_service_plan_id)->get();
            return view('frontend.customer.edit_paid_service_application',compact('questions','profile'));
        }
    }
}
