<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Dotenv\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        
        $this->validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed'
        ]);

        $request['password'] = Hash::make($request['password']);


        if($this->validator->fails()){
            $this->message = $this->validator->messages();
            
            return back()->withErrors([
                'Error'=> $this->message->get('password'),
            ]);
        }

        $user = User::create(request([
            'name', 
            'email',
            'password'
        ]));
        return redirect()->route('phonebook.login');

    }

}
