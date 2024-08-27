<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Faq;
use App\Models\PaidService;
use App\Models\PaidServicePrice;
use App\Models\PricingPlan;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\Service;
use App\Models\Testmonial;
use App\Models\User;
use App\Models\VisaApplication;
use App\Models\VisaType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Str;

class HomeController extends Controller
{
    public function index(){
        $data['countries'] =Country::take(4)->get();
        $data['services'] =Service::take(8)->get();
        $data['testmonials'] =Testmonial::take(5)->get();
        return view('frontend.webpages.home',$data);
    }

    public function loginForm(){
        return view('frontend.webpages.login');
    }

    public function signUpForm(){
        return view('frontend.webpages.sign_up');
    }

    public function getCountries($continent_id =null){
        $continent_id =$continent_id ?? 1;
        $continents =Continent::orderBy('name','ASC')->get();
        $countries  =Country::where('continent_id',$continent_id)->get();
        return view('frontend.webpages.countries',compact('continents','countries'));
    }

    public function countryDetails($country_uuid){
        $country    =Country::where('uuid',$country_uuid)->first();
        $continents =Continent::orderBy('name','ASC')->get();
        return view('frontend.webpages.country_detail',compact('country','continents'));
    }

    public function visaApplication(){
        $services =PaidService::get();
        return view('frontend.webpages.visa_application',compact('services'));
    }

    public function pricingPlan(){
        $pricings =PricingPlan::get();
        return view('frontend.webpages.pricing_plans',compact('pricings'));

    }

    public function testimonials(){
        $testimonials =Testmonial::latest()->get();
        return view('frontend.webpages.testimonials',compact('testimonials'));
 
    }

    public function faq(){
        $faqs =Faq::latest()->get();
        return view('frontend.webpages.faqs',compact('faqs')); 
    }

    public function additionalServices(){
        $services =Service::get();
        return view('frontend.webpages.additional_services',compact('services')); 
    }

    public function getService($uuid){
        $service =Service::where('uuid',$uuid)->first();
        $services =Service::get();
        return view('frontend.webpages.service_detail',compact('service','services'));
    }

    public function aboutUs(){
        return view('frontend.webpages.about_us');
    }

    public function visaRequest($visa_id =1){
        $questions =Question::where('visa_type_id',$visa_id)->get();
        if (empty($questions->count())) {
            return redirect()->back()->with('message', 'Question Not Uploaded Yet');
        }
        return view('frontend.webpages.visa_request',compact('questions','visa_id'));
    }

    public function serviceApplication($service_uuid){
        $service =PaidService::with('price_plans')->where('uuid',$service_uuid)->first();
        return view('frontend.webpages.paid_price_plans',compact('service'));

    }

    public function paidServiceForm($plan_uuid){
        $price_plan =PaidServicePrice::with('questions')->where('uuid',$plan_uuid)->first();
        return view('frontend.webpages.paid_service_form',compact('price_plan'));
    }

    public function paidServiceStore(Request $request){
        try {
            DB::transaction(function() use ($request){
                  // inser visa application

                  $application =VisaApplication::create([
                    'applicant_id'         =>Auth::user()->id,
                    'paid_service_plan_id' =>$request['paid_service_plan_id'],
                    'application_type'     =>2,
                    'uuid'                 =>(string)Str::orderedUuid(),
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
                            'application_type' =>2,
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
