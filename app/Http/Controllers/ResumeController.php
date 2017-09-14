<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Response;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ResumeController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /* View own resume */
    function viewResume(){
        $user = Auth::user();
        $filename = "resume-" . $user->id . ".pdf";
        $path = storage_path('app/public/resumes/' . $filename);

        if(File::exists($path)){
            $file = File::get($path);

            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="'.$filename.'"'
            ]);
        }
        else{
            return Redirect::route('profile');
        }
    }

    /* Upload own resume. */
    public function uploadResume(Request $request){
        $user = Auth::user();

        /* Validate incoming PDF. */
        $this->validate($request, [
            'resume' => 'required|mimes:pdf|max:10000'
        ]);

        $resume = $request->file('resume');
        $filename = "resume-" . $user->id . ".pdf";

        Storage::putFileAs('public/resumes/', $resume, $filename);

        return Redirect::route('profile');
    }

    /* Delete own resume. */
    function deleteResume(){
        $user = Auth::user();
        $filename = "resume-" . $user->id . ".pdf";
        $path = storage_path('app/public/resumes/' . $filename);

        if(File::exists($path)){
            File::Delete($path);
        }

        return Redirect::route('profile');
    }
}
