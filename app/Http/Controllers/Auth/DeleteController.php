<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class DeleteController extends Controller
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
     * Delete account.
     *
     * @return void
     */
    public function delete()
    {
        $id = Auth::user()->id;   
        User::destroy($id);

        return redirect()->route('home');
    }
}
