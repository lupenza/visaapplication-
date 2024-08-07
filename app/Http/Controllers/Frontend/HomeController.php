<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
}
