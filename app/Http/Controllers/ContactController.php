<?php

namespace App\Http\Controllers;

use Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller{

    /* Send an email. */
    function send(Request $request){
        Mail::raw($request['message'] . '. From: ' . $request['email'], function($message){
            $message->subject('Contact form submission');
            $message->to('s3481341@student.rmit.edu.au');
        });

        Mail::raw($request['message'] . '. From: ' . $request['email'], function($message){
            $message->subject('Contact form submission');
            $message->to('s3434719@student.rmit.edu.au');
        });

        Mail::raw($request['message'] . '. From: ' . $request['email'], function($message){
            $message->subject('Contact form submission');
            $message->to('s3491115@student.rmit.edu.au');
        });

        Mail::raw($request['message'] . '. From: ' . $request['email'], function($message){
            $message->subject('Contact form submission');
            $message->to('s3476694@student.rmit.edu.au');
        });

        Mail::raw($request['message'] . '. From: ' . $request['email'], function($message){
            $message->subject('Contact form submission');
            $message->to('s3536578@student.rmit.edu.au');
        });
    }
}
