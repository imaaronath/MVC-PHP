<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(Request $request)
    {
        return view('register');
    }
    public function submit(Request $request)
    {
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $country = $request->input('country');
        return view('welcome',['fname'=>$fname,'lname'=>$lname,'country'=>$country]);
    }
}
