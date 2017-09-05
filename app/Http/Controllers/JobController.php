<?php

namespace App\Http\Controllers;

use App\Job;
use App\Http\Controllers\Controller;

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
     * Show post page.
     *
     * @return \Illuminate\Http\Response
     */
    public function matchIndex()
    {
        return view('matches');
    }

    /**
     * Show job page.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobIndex()
    {
        $id = $request['id'];
        $job = Job::findOfFail($id);
        $title = $job->title;
        $description = $job->description;
        $hours = $job->hous;
        $salary = $job->salary;
        $availablefrom = $job->availablefrom;
        $location = $job->location;
        $startdate = $job->startdate;

        return view("job",["title"=>$title, "description"=>$description, "hours"=>$hours, "salary"=>$salary, "availablefrom"=>$availablefrom, "location"=>$location, "startdate"=>$startdate]);
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

        return redirect()->route('home');
    }

    public function getJobs($state){
        return "hello";
    }
}
