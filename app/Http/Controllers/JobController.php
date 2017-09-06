<?php

namespace App\Http\Controllers;

use App\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return view("job",["id"=>$id, "title"=>$title, "description"=>$description, "hours"=>$hours, "salary"=>$salary, "startdate"=>$startdate, "state"=>$state, "city"=>$city]);
    }

    /**
     * Display application page for a specific job.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayApplyForJob($id)
    {
        /* This needs to be expanded. */
        return view('apply');
    }

     /**
     * Delete job.
     *
     * @return void
     */
    public function delete()
    {
        $job = $request['id'];
        Job::destroy($job);

        return redirect()->route('index');
    }

    public function getJobs($state){
        $jobs = Job::where('state', $state)->get();

        return $jobs;
    }
}
