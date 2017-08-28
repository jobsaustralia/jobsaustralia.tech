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

    //update logged in user profie
    public function updateProfile(Request $request)
       {
         //this to ensure when user goes to edit their profile, they don't have to change their currently assigned email.
         $user = $request->user();

         /* Validate incoming data */
         $this->validate($request, [
             'name' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
             'title' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
             'sector' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
             'location' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
             'experience' => 'required|integer|min:0|max:50',
             'email' => 'required|string|email|max:255|unique:users,email,' . $user->id
         ]);

         //You can get a User's current ID like this.
         $id = Auth::user()->id;

         $user = User::findOrFail($id);
         $user->name=$request['name'];
         $user->email=$request['email'];
         $user->title=$request['title'];
         $user->location=$request['location'];
         $user->sector=$request['sector'];
         $user->experience=$request['experience'];
         $user->java=$request['java'];
         $user->python=$request['python'];
         $user->c=$request['c'];
         $user->csharp=$request['csharp'];
         $user->cplus=$request['cplus'];
         $user->php=$request['php'];
         $user->html=$request['html'];
         $user->css=$request['css'];
         $user->javascript=$request['javascript'];
         $user->sql=$request['sql'];
         $user->unix=$request['unix'];
         $user->winserver=$request['winserver'];
         $user->windesktop=$request['windesktop'];
         $user->linuxdesktop=$request['linuxdesktop'];
         $user->macosdesktop=$request['macosdesktop'];
         $user->pearl=$request['pearl'];
         $user->bash=$request['bash'];
         $user->batch=$request['batch'];
         $user->cisco=$request['cisco'];
         $user->office=$request['office'];
         $user->r=$request['r'];
         $user->go=$request['go'];
         $user->ruby=$request['ruby'];
         $user->asp=$request['asp'];
         $user->scala=$request['scala'];

         $user->save();

         return Redirect::route('profile');
       }
}
