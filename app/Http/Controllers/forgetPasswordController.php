<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class forgetPasswordController extends Controller
{
    
    public function index(){
        return view('askForEmail');
    }


    public function email_sent(){
        return view('emailSent');
    }

    public function send_login_link( Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('requiredError', 'Something wrong with email!!');
        }

        $user = User::where(['email'=>$request->email])->first();
        if($user != null){
            MailController::send_password_reset_email($user->name, $user->email, $user->verification_code);
            return redirect()->route('phonebook.emailsent');
        }
        
    }


    public function reset_link(Request $request){
        $verification_code = $request->query('code');
        if($verification_code === null){
            return redirect()->route('phonebook.login')->with('verificationError', 'Plese verify yourself first!!');
        }
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user != null){
            return view('resetPassword', ['verification_code' => $verification_code]);
        }
        return redirect()->route('phonebook.login')->with('Error', 'Something went wrong!!');
    }

    public function reset_password(Request $request, $verification_code){

        $validator = Validator::make($request->all(), [
            'new_password' => ['required'],
            'confirm_new_password' => ['same:new_password'],
        ]);

        if($validator->fails()){
            return redirect()->back()->with('validationError', 'The password didn\'t match.');
        }

        $user = User::where(['verification_code'=>$verification_code])->first();
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return redirect()->route('phonebook.user.profile')->with('passwordChangeSuccess', 'Password reset successful!');

    }


}
