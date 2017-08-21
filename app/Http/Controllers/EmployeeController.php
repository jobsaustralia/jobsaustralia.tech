<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class EmployeeController extends Controller
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
     * Show profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    public function editProfileForm() {
          return view('profile.editProfile')->with('data', Auth::user()->profile);
      }

      public function updateProfile(Request $request) {

        $user_id = Auth::user()->id;

        DB::table('users')->where('user_id', $user_id)->update($request->except('_token'));
        return back();
    }

    public function jobs(){
    $jobs = DB::table('jobs')
    ->Join('jobs','users.id','jobs.company_id')
    ->get();
    return view('profile.jobs', compact('jobs'));
  }

  public function job($id){
    $jobs = DB::table('jobs')
    ->leftJoin('jobs','users.id','jobs.company_id')
    ->where('jobs.id',$id)
    ->get();
    return view('profile.job', compact('jobs'));
  }
}
