<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    // Go to Login Page
    public function loginPage(){
        if(Auth::user()){
            return redirect('/');
        }
        return view('login');
    }


    //authenticate user
    public function authenticate(Request $request){
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($credential)){
            return redirect('/');
        }
    }

    public function logOut(){
        Auth::logout();
        return redirect('/');
    }
}
