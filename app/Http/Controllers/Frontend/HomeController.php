<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Faq;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Testmonial;
use App\Models\User;
use App\Models\VisaType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function index(){
        $data['countries'] =Country::take(4)->get();
        $data['services'] =Service::take(8)->get();
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
        $visa_types =VisaType::get();
        return view('frontend.webpages.visa_application',compact('visa_types'));
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
}
