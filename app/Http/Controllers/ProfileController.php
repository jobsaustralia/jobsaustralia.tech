<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
    
    public function update(Request $request, $id)
    {
        //You can get a User's current ID like this.
        $id = Auth::user()->id; 

        $user = User::findOrFail($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');

        $user->save();
        return Redirect::route('profile');
    }
}
