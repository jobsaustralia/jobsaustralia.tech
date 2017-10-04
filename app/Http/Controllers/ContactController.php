<?php

namespace App\Http\Controllers;

use Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller{

    /* Send an email to each team member. */
    function send(Request $request){
        $email = $request['email'];

        Mail::raw($request['message'] . "\n\n" . 'From: ' . $request['name'] . "\n\n" . 'IP: ' . request()->ip(), function($message) use($email){
            $message->subject('Contact form submission');
            $message->to('s3481341@student.rmit.edu.au');
            $message->replyTo($email);
        });

        Mail::raw($request['message'] . "\n\n" . 'From: ' . $request['name'] . "\n\n" . 'IP: ' . request()->ip(), function($message) use($email){
            $message->subject('Contact form submission');
            $message->to('s3434719@student.rmit.edu.au');
            $message->replyTo($email);
        });

        Mail::raw($request['message'] . "\n\n" . 'From: ' . $request['name'] . "\n\n" . 'IP: ' . request()->ip(), function($message) use($email){
            $message->subject('Contact form submission');
            $message->to('s3491115@student.rmit.edu.au');
            $message->replyTo($email);
        });

        Mail::raw($request['message'] . "\n\n" . 'From: ' . $request['name'] . "\n\n" . 'IP: ' . request()->ip(), function($message) use($email){
            $message->subject('Contact form submission');
            $message->to('s3476694@student.rmit.edu.au');
            $message->replyTo($email);
        });

        Mail::raw($request['message'] . "\n\n" . 'From: ' . $request['name'] . "\n\n" . 'IP: ' . request()->ip(), function($message) use($email){
            $message->subject('Contact form submission');
            $message->to('s3536578@student.rmit.edu.au');
            $message->replyTo($email);
        });

        return Redirect::route('contact');
    }
}
