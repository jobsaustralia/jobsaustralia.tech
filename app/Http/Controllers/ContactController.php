<?php

namespace App\Http\Controllers;

use Mail;

use App\Mail\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller{

    /* Send an email to each team member. */
    function send(Request $request){

        /* Email data. */
        $title = "Contact form submission";
        $email = $request['email'];
        $content = $request['message'];
        $name = $request['name'];
        $ip = request()->ip();

        /* Queue emails. */
        Mail::to('s3481341@student.rmit.edu.au')->queue(new Contact($email, $title, $content, $name, $ip));

        Mail::to('s3434719@student.rmit.edu.au')->queue(new Contact($email, $title, $content, $name, $ip));

        Mail::to('s3491115@student.rmit.edu.au')->queue(new Contact($email, $title, $content, $name, $ip));

        Mail::to('s3476694@student.rmit.edu.au')->queue(new Contact($email, $title, $content, $name, $ip));

        Mail::to('s3536578@student.rmit.edu.au')->queue(new Contact($email, $title, $content, $name, $ip));

        return Redirect::route('contact');
    }
}
