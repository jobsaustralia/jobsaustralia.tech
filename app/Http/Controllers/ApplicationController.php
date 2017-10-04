<?php

namespace App\Http\Controllers;

use App\Application;
use App\Employer;
use App\Job;
use App\User;

use Auth;
use Mail;
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
            'jobid' => 'required|regex:/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/|exists:jobs,id',
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
                'message' => $request['message']
            ]);

            $employer = Employer::findOrFail($job->employerid);

            /* Send a notification email to the employer depending on preference. */
            if($employer->notifyapply){
                $email = $employer->email;

                Mail::raw('A job seeker has applied a your job on JobsAustralia.tech!' . "\n\n" . $request['message'], function($message) use($email){
                    $message->subject('Job application received');
                    $message->to($email);
                });
            }
        }

        return Redirect::route('applications');
    }

    /* Display applications page. */
    public function indexApplications(){
        $user = Auth::user();

        $applications = Application::where('userid', $user->id)->get();

        foreach($applications as $application){
            $job = Job::findOrFail($application->jobid);
            $application->jobtitle = $job->title;

            $employer = Employer::findOrFail($application->employerid);
            $application->employername = $employer->name;
        }

        return view('applications')->with(compact('applications'));
    }

    /* Display delete application page. */
    public function indexDelete($id){
        $application = Application::findOrFail($id);
        $job = Job::findOrFail($application->jobid);
        $application->jobtitle = $job->title;
        $user = Auth::user();

        if($application->userid == $user->id){
            return view('delete-application', compact('application'));
        }
        else{
            return Redirect::route('applications');
        }
    }

    /* Delete application. */
    public function delete(Request $request){
        $id = $request['id'];
        $application = Application::findOrFail($id);
        $user = Auth::user();

        if(User::findOrFail($application->userid) == $user){
            Application::destroy($id);
        }

        return Redirect::route('applications');
    }
}
