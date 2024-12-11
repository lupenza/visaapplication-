<?php

namespace App\Http\Controllers\Backend;
use App\Models\VisaApplication;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user =  Auth::user();

        $applications =  VisaApplication::latest()->get(); 

        $users =  User::latest()->get(); 

        return view('backend.dashboard.home', compact('user', 'applications', 'users'));
    }

    public function websiteMenu(){
        return view('backend.website.menu');
    }
}