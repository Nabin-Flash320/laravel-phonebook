<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{



    public function index(){
        return view('login');
    }

    public function login(Request $request){
        
        $credentials = $request->validate([
            'email'    => 'required | email',
            'password' => 'required',
        ]);


        //Try hashing the registered user's password!!
        // dd(Auth::attempt($credentials));

        if(Auth::attempt($credentials)){
            return redirect()->route('phonebook.list');
        }

        return back()->with('error', 'Invalid credentials or user not registered');

    }


    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('phonebook.login');


    }


}
