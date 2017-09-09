<?php

namespace App\Http\Controllers;

use App\Application;
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

    /* Get all Jobs by state to which the job seeker has not applied. */
    public function getJobs($state){
        $jobs = Job::where('state', $state)->get();
        $applications = Application::where('userid', Auth::user()->id)->get();

        /* Populate an array of job IDs to which the job seeker has applied. */
        $appliedJobIDs = array();
        foreach($jobs as $job){
            foreach($applications as $application){
                if($application->jobid == $job->id){
                    array_push($appliedJobIDs, $job->id);
                }
            }
        }

        /* Populate an array of jobs whose IDs are not in the above array. */
        $unappliedJobs = array();
        foreach($jobs as $job){
            if(!in_array($job->id, $appliedJobIDs)){
                array_push($unappliedJobs, Job::findOrFail($job->id));
            }
        }

        return $unappliedJobs;
    }
}
