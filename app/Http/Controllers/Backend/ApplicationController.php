<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        return view('backend.applications.list');
    }

    public function create(){
        return view('backend.applications.add');
    }

    
}
