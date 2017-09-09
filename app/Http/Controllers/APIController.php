<?php

namespace App\Http\Controllers;

use App\Job;

use Auth;

use App\Http\Controllers\Controller;

class APIController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Get currently authenticated user. */
    public function getUser(){
        return Auth::user();
    }

    /* Get all Jobs by state. */
    public function getJobs($state){
        $jobs = Job::where('state', $state)->get();

        return $jobs;
    }
}
