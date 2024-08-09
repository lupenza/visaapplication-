<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Continent;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.webpages.home');
    }

    public function loginForm(){
        return view('frontend.webpages.login');
    }

    public function getCountries($continent_id =null){
        $continent_id =$continent_id ?? 1;
        $continents =Continent::orderBy('name','ASC')->get();
        $countries  =Country::where('continent_id',$continent_id)->get();
        return view('frontend.webpages.countries',compact('continents','countries'));
    }

    public function countryDetails($country_id){
        $country =Country::find($country_id);
        $continents =Continent::orderBy('name','ASC')->get();
        return view('frontend.webpages.country_detail',compact('country','continents'));
    }
}
