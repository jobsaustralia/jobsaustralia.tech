<?php

namespace App\Http\Controllers;

use App\Job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show matches page.
     *
     * @return \Illuminate\Http\Response
     */
    public function matchIndex()
    {
        return view('matches');
    }

    /**
     * Display a specific job.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function displayJob($id)
    {
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

    /**
     * Delete job.
     *
     * @return Illuminate\Support\Facades\Redirect
     */
    public function delete()
    {
        $job = $request['id'];
        Job::destroy($job);

        return Redirect::route('index');
    }

    /**
     * Return all jobs by filter for API.
     *
     * @param  $state
     * @return \Illuminate\Http\Response
     */
    public function getJobs($state){
        $jobs = Job::where('state', $state)->get();

        return $jobs;
    }
}
