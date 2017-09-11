<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job;

use Auth;
use Uuid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Apply for a job. */
    public function apply(Request $request){
        $this->validate($request, [
            'jobid' => 'required|uuid|exists:jobs,id',
            'message' => 'required|string'
        ]);

        $id = $request['jobid'];

        $count = Application::where('jobid', $id)->where('userid', Auth::user()->id)->get()->count();

        /* Verify that the job seeker has not yet applied to the job. */
        if($count == 0){
            $job = Job::findOrFail($id);

            Application::create([
                'id' => Uuid::generate(),
                'userid' => Auth::user()->id,
                'employerid' => $job->employerid,
                'jobid' => $id,
                'message' => $request['message'],
            ]);
        }

        return Redirect::route('matches');
    }
}
