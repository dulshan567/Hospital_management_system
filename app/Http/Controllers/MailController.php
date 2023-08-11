<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Test;


/**
 * Summary of MailController
 */
class MailController extends Controller
{
    /**
     * Summary of sendEmail
     * @return string
     */
    public function sendEmail()
    {
        $details = [
            'title ' =>  'Mail form',
            'body ' => 'Testing email.'
        ];

        Mail::to("dulshansulakshana5@gmail.com")->send(new TestMail($details));
        return "email send";
    }
    
    /**
     * Summary of Tests
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
  
}
