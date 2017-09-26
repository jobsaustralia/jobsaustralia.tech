<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller{

    /* Send an email. */
    function send(Request $request){
        Mail::raw($request['message'] function($message){
        $message->subject('This is a test.');
        $message->to('s3481341@student.rmit.edu.au', 's3491115@student.rmit.edu.au');
		});
    }
}
