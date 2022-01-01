<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_data)
    {
        $this->email_data = $email_data;
        // dd($this->email_data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->email_data);
        return $this->from(env('MAIL_USERNAME', env('From office')))
                                ->subject('Email Verification Code')
                                ->view('registrationEmail', ['email_data'=>$this->email_data]);
    }
}
