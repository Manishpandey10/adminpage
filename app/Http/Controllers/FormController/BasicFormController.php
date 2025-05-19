<?php

namespace App\Http\Controllers\FormController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BasicFormController extends Controller
{
    public function viewform(){
        return view('frontend.form.simpleform');
    }

     public function registeruser(Request $request)
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
            return  redirect()->back()->withInput()->with('registererror', "cannot register the user, enter valid values!");     
        }
        $page = User::paginate(15);
        $lastpage = $page->lastPage();

        return redirect()->route('viewtable', ['page' => $lastpage]);
    }
    }
