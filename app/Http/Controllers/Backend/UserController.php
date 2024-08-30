<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Hash;
use Str;

class UserController extends Controller
{
    public function index(){
        $users =User::with('roles')->get();
        $roles =Role::get();
        // return $users;
        return view('backend.other_pages.user_list',compact('users','roles'));
    }

    public function store(Request $request){
        $valid =$request->validate([
            'first_name'  =>'required',
            'last_name'   =>'required',
            'email'      =>'required|unique:users,email',
            // 'password'   =>['required','confirmed','string','min:6','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/'],
            'password'   =>['required','confirmed','string','min:6'],
            'role_id'      =>'required',
        ]);
        $request->all();
        $user =User::create([
            'name'       =>$valid['first_name'].' '.$valid['last_name'],
            'first_name' =>$valid['first_name'],
            'last_name' =>$valid['last_name'],
            'email'         =>$valid['email'],
            'username'      =>$valid['email'],
            'password'       =>Hash::make($valid['password']),
            'uuid'           =>(string)Str::orderedUuid(),
            'is_active'      =>true,
        ]);

        $user->assignRole($valid['role_id']);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ]);
    }
}
