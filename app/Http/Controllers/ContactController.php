<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Send email to admin.
     *
     * @return void
     */
    public function send(Request $request)
    { 
        
        //echo $request['name'];

        //return redirect()->route('home');
    }
}
