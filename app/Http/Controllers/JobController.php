<?php

namespace App\Http\Controllers;

use App\Application;
use App\Employer;
use App\Job;

use Auth;

use App\Http\Controllers\Controller;

class JobController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Show matches page. */
    public function matchIndex(){
        return view('matches');
    }

    /* Show job page by ID. */
    public function jobIndex($id){
        $job = Job::findOrFail($id);

        $title = $job->title;
        $description = $job->description;
        $term = $job->term;
        $hours = $job->hours;
        $salary = $job->salary;
        $rate = $job->rate;
        $startdate = $job->startdate;
        $state = $job->state;
        $city = $job->city;

        $employerid = $job->employerid;
        $employer = Employer::findOrFail($employerid);

        $employername = $employer->name;

        /* Count the number of times the job seeker has applied to the job. */
        $count = Application::where('jobid', $id)->where('userid', Auth::user()->id)->get()->count();

        return view("job", ["id"=>$id, "title"=>$title, "description"=>$description, "term"=>$term, "hours"=>$hours, "salary"=>$salary, "rate"=>$rate, "startdate"=>$startdate, "state"=>$state, "city"=>$city, "count"=>$count, "employername"=>$employername, "employerid"=>$employerid]);
    }

    function employerProfile($id){
        $employer = Employer::findOrFail($id);

        $id = $employer->id;
        $name = $employer->name;
        $state = $employer->state;
        $city = $employer->city;

        return view("employer", ["id"=>$id, "name"=>$name, "state"=>$state, "city"=>$city]);
    }
}
