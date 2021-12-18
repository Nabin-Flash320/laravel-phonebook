<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use App\Models\User;
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

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->verification_code = sha1(time());
        $user->save();

        if($user  != null){
            MailController::send_registration_email($user->name, $user->email, $user->verification_code);
            return redirect()->route('phonebook.register')->with('verification_success', 'Registration email sent successfully');
        }

        return redirect()->route('phonebook.register')->with('verification_error', 'Something went wrong!');

    }

    public function verify_registered_email(Request $request){

        $verification_code = $request->query('code');
        $user = User::where(['verification_code'=>$verification_code])->first();
        if($user != null){
            $user->is_verified = 1;
            $user->email_verified_at = now();
            $user->save();
            return redirect()->route('phonebook.login')->with('verification_success', 'Email successfully verified!');
        }

        return redirect()->route('phonebook.register')
                        ->with('verification_error', 'Invalid verification code');
    }

}
