<?php

namespace App\Http\Controllers;

use App\User;

use Auth;
use File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Show profile page. */
    public function index(){
        return view('profile');
    }

    /* Show edit profile page. */
    public function editIndex(){
        return view('edit');
    }

    /* Update user. */
    public function updateProfile(Request $request){
        $user = Auth::user();

        /* Validate incoming data */
        $this->validate($request, [
            'name' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'title' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'sector' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'experience' => 'required|integer|min:0|max:100',
            'state' => 'required|string|in:vic,nsw,qld,wa,sa,tas,act,nt,oth',
            'city' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'github' => 'max:40',
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
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id
        ]);

        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->title=$request['title'];
        $user->sector=$request['sector'];
        $user->experience=$request['experience'];
        $user->state=$request['state'];
        $user->city=$request['city'];
        $user->github=$request['github'];

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

    /* Delete user. */
    public function delete(){
        $id = Auth::user()->id;
        User::destroy($id);

        return Redirect::route('index');
    }
}
