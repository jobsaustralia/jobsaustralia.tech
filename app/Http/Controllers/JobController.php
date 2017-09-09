<?php

namespace App\Http\Controllers;

use App\Job;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
        $hours = $job->hours;
        $salary = $job->salary;
        $startdate = $job->startdate;
        $state = $job->state;
        $city = $job->city;
        
        $startdate = $job->startdate;

        return view("job", ["id"=>$id, "title"=>$title, "description"=>$description, "hours"=>$hours, "salary"=>$salary, "startdate"=>$startdate, "state"=>$state, "city"=>$city]);
    }
}
