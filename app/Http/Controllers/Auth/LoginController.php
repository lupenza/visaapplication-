<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Str;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username is required',
                'password.required' => 'Password is required',
            ]
        );

        $username =$request->input('username');
        $password =$request->input('password');
        $remember =$request->input('remember');


        if (Auth::attempt(['email' => $username, 'password' => $password],$remember)) {
            $user = User::find(auth()->user()->id);
            if ($user->is_active) { 
               if ($user->hasRole('Admin') || $user->hasRole('Super Admin') || $user->hasRole('Customer')) {
                if ($user->hasRole('Admin') || $user->hasRole('Super Admin')) {
                    return response()->json([
                        'success' =>true,
                        'message' =>$user->name.' Welcome Again',
                        'url'     =>URL::to('dashboard')
                    ]);
                }elseif($user->hasRole('Customer')){
                    $last_url =Session::get('last_url');
                    $url =$last_url ?? URL::to('dashboard');
                    Session::forget('last_url');
                    return response()->json([
                        'success' =>true,
                        'message' =>$user->name.' Welcome Again',
                        'url'     =>$url,
                    ]);
                } 
                else {
                    return response()->json([
                        'success' =>true,
                        'message' =>$user->name.' Welcome Again',
                        'url'     =>URL::to('/')
                    ]);
                }
               
               } else {
                Auth::logout();
                return response()->json([
                    'success' =>false,
                    'errors' =>'You dont have Permission to access this site',
                ],500);
               }
               

            } else {
                Auth::logout();
                return response()->json([
                    'success' =>false,
                    'errors' =>'Your Account has been Deactivated , Contact System Adminstrator to Activate Your Account',
                ],500);
            }
        } else {
            return response()->json([
                'success' =>false,
                'errors' =>'Invalid email/Username or Password',
            ],500);
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

    public function storeUser(Request $request){
        $valid =$request->validate([
            'first_name'  =>'required',
            'last_name'   =>'required',
            'email'      =>'required|unique:users,email',
            'password'   =>['required','confirmed','string','min:6','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/'],
            'agree'      =>'required',
        ]);

        $user =User::create([
            'name'       =>$valid['first_name'].' '.$valid['last_name'],
            'first_name' =>$valid['first_name'],
            'last_name' =>$valid['last_name'],
            'email'         =>$valid['email'],
            'username'      =>$valid['email'],
            'password'  =>Hash::make($valid['password']),
            'uuid'      =>(string)Str::orderedUuid(),
            'is_active' =>true,
        ]);

        $user->assignRole('Customer');

        return response()->json([
            'success' =>true,
            'message' =>'You have successfully registered'
        ]);
    }
}
