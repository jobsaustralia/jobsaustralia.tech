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
    public function index()
    {
        return view('matches');
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
}
