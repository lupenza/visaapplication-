<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

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
                    $url =$last_url ?? URL::to('my-account');
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
}
