<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Show edit profile form.
     *
     * @return \Illuminate\Http\Response
     */
    public function editIndex()
    {
        return view('edit');
    }

    /**
     * Update user.
     *
     * @return Illuminate\Support\Facades\Redirect
     */
    public function updateProfile(Request $request)
    {
        //this to ensure when user goes to edit their profile, they don't have to change their currently assigned email.
        $ruser = $request->user();

        /* Validate incoming data */
        $this->validate($request, [
            'name' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'title' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'sector' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'location' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'experience' => 'required|integer|min:0|max:50',
			'java' => 'boolean',
			'python' => 'boolean',
			'c' => 'boolean',
			'csharp' => 'boolean',
			'cplus' => 'boolean',
			'php' => 'boolean',
			'html' => 'boolean',
			'css' => 'boolean',
			'javascript' => 'boolean',
			'sql' => 'boolean',
			'unix' => 'boolean',
			'winserver' => 'boolean',
			'windesktop' => 'boolean',
			'linuxdesktop' => 'boolean',
        	'macosdesktop' => 'boolean',
			'pearl' => 'boolean',
			'bash' => 'boolean',
			'batch' => 'boolean',
			'cisco' => 'boolean',
			'office' => 'boolean',
			'r' => 'boolean',
			'go' => 'boolean',
			'ruby' => 'boolean',
			'asp' => 'boolean',
			'scala' => 'boolean',
            'email' => 'required|string|email|max:255|unique:users,email,' . $ruser->id
        ]);

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
