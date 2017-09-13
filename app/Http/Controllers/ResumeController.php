<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;

use Auth;
use Uuid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ResumeController extends Controller{

  public function __construct(){
      $this->middleware('auth');
  }

  /*Upload resume. */
  public function uploadResume(Request $request)
  {
    $resume = $request->file('resume');
    if($request->hasFile('resume')){
      $resume_orginal_name = $resume->getClientOriginalName();
      Storage::putFileAs('public/resumes', $resume, $resume_orginal_name);
    }
    User::where('id', Auth::id())->update(['resume'=>$resume_orginal_name]);

return redirect()->route('profile');

  }




}
