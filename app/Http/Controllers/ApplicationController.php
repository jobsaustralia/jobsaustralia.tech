<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use App\Application;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ApplicationController extends Controller
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
     * Apply for job.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Support\Facades\Redirect
     */
    public function apply(Request $request)
    {
        $this->validate($request, [
            'jobid' => 'required|integer|exists:jobs,id',
            'message' => 'required|string'
        ]);

        $id = $request['jobid'];
        $job = Job::findOrFail($id);

        Application::create([
            'userid' => Auth::user()->id,
            'employerid' => $job->employerid,
            'jobid' => $id,
            'message' => $request['message'],
        ]);

        return Redirect::route('matches');
    }
}
