<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.userauth.login');
    }

        public function verify(Request $request)
    {
        
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',

            ],
            [
                'email.required' => "Email is required.",
                'email.email' => "Email should be a valid email.",
                'password.required' => "Password is required.",
            ]
        );


        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        )) {
            return redirect('dashboard');
        }
        return redirect()->back()->with(['error' => 'Wrong Credentials!! Please enter valid credentials'])->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('logoutMsg',"you're logged out, please sign in again");
    }
}
