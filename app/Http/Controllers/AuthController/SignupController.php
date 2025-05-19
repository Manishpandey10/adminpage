<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('frontend.userauth.signup');
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            "email" => "required",
            "password" => "required|min:6|max:10|confirmed",
            "password_confirmation" => "required",
            "country" => "required|in:India,United States of America,United Kingdom,Germany,Argentina"
        ]);

        $newentry = new User();
        $newentry->username = $request->username;
        $newentry->email = $request->email;
        $newentry->password = Hash::make( $request->password );
        $newentry->country = $request->country;
        $newentry->save();

        if (!$newentry) {
            return  redirect()->back()->withInput()->with('error', "cannot register the user, enter valid values!");
        } else {
            return redirect('login')->with([
                "Success" => "User has been registred successfully!! Login to Proceed",
                "Error" => "Something went wrong!!"
            ])->withInput();
        }
    }
}
