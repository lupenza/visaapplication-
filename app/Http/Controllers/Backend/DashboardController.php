<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        // return Auth::user();
        return view('backend.dashboard.home');
    }

    public function websiteMenu(){
        return view('backend.website.menu');
    }
}
