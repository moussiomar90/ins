<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($email)
    {
        $details = [
            'title' => 'Mail from ADMI',
            'body' => 'This is for testion'
        ];
        Mail::to('onetouch1198@gmail.com')->send(new TestMail($details));
        return view('register');
    }
}
