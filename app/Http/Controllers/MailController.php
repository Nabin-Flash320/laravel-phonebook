<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use App\Mail\PasswordResetMail;


class MailController extends Controller
{
    
    public static function send_registration_email($name, $email, $verification_code){
        $email_data = ['name'=>$name, 'email'=>$email, 'verification_code'=>$verification_code];
        Mail::to($email)->send(new RegistrationMail($email_data));
    }

    public static function send_password_reset_email($name, $email, $verification_code){
        $email_data = ['name'=>$name, 'email'=>$email, 'verification_code'=>$verification_code];
        Mail::to($email)->send(new PasswordResetMail($email_data));
    }


}
