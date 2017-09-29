<?php

namespace App\Http\Controllers;

use App\Application;
use App\Employer;
use App\Job;

use Auth;
use Carbon\Carbon;
use Session;

use App\Http\Controllers\Controller;

class APIController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Get currently authenticated user. */
    public function getUser($token){
        if(Session::token() == $token){
            return Auth::user();
        }
    }

    /* Get all Jobs by state to which the job seeker has not applied. */
    public function getJobs($state, $hours, $term, $rate, $salary, $token){
        if(Session::token() == $token){
            if($hours == "any" && $term == "any" && $salary == "any"){
                $jobs = Job::where('state', $state)->get();
            }
            else if($hours == "any" && $term == "any" && $salary !== "any"){
                $jobs = Job::where('state', $state)->where('rate', $rate)->where('salary', '>=', $salary)->get();
            }
            else if($hours == "any" && $term !== "any" && $salary !== "any"){
                $jobs = Job::where('state', $state)->where('term', $term)->where('rate', $rate)->where('salary', '>=', $salary)->get();
            }
            else if($hours == "any" && $term !== "any" && $salary == "any"){
                $jobs = Job::where('state', $state)->where('term', $term)->get();
            }
            else if($hours !== "any" && $term == "any" && $salary == "any"){
                $jobs = Job::where('state', $state)->where('hours', $hours)->get();
            }
            else if($hours !== "any" && $term !== "any" && $salary == "any"){
                $jobs = Job::where('state', $state)->where('hours', $hours)->where('term', $term)->get();
            }
            else if($hours !== "any" && $term == "any" && $salary !== "any"){
                $jobs = Job::where('state', $state)->where('hours', $hours)->where('rate', $rate)->where('salary', '>=', $salary)->get();
            }
            else{
                $jobs = Job::where('state', $state)->where('hours', $hours)->where('term', $term)->where('rate', $rate)->where('salary', '>=', $salary)->get();
            }

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
                    $employer = Employer::findOrFail($job->employerid);
                    $job->employername = $employer->name;

                    if(Carbon::now()->format('Y-m-d') < $job->startdate){
                        array_push($unappliedJobs, $job);
                    }
                }
            }

            return $unappliedJobs;
        }
    }

    /* Get all Jobs by state to which the job seeker has not applied. */
    public function getJobsByEmployer($employerid, $token){
        if(Session::token() == $token){
            $jobs = Job::where('employerid', $employerid)->get();
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
                    $employer = Employer::findOrFail($job->employerid);
                    $job->employername = $employer->name;

                    array_push($unappliedJobs, $job);
                }
            }

            return $unappliedJobs;
        }
    }
}
