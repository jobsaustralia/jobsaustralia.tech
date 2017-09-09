<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/matches';

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('guest');
    }

    /* Validate user. */
    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'title' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'sector' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'experience' => 'required|integer|min:0|max:100',
            'state' => 'required|string|in:vic,nsw,qld,wa,sa,tas,act,nt,oth',
            'city' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'java' => 'required|boolean',
            'python' => 'required|boolean',
            'c' => 'required|boolean',
            'csharp' => 'required|boolean',
            'cplus' => 'required|boolean',
            'php' => 'required|boolean',
            'html' => 'required|boolean',
            'css' => 'required|boolean',
            'javascript' => 'required|boolean',
            'sql' => 'required|boolean',
            'unix' => 'required|boolean',
            'winserver' => 'required|boolean',
            'windesktop' => 'required|boolean',
            'linuxdesktop' => 'required|boolean',
            'macosdesktop' => 'required|boolean',
            'pearl' => 'required|boolean',
            'bash' => 'required|boolean',
            'batch' => 'required|boolean',
            'cisco' => 'required|boolean',
            'office' => 'required|boolean',
            'r' => 'required|boolean',
            'go' => 'required|boolean',
            'ruby' => 'required|boolean',
            'asp' => 'required|boolean',
            'scala' => 'required|boolean',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /* Create user. */
    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'sector' => $data['sector'],
            'experience' => $data['experience'],
            'state' => $data['state'],
            'city' => $data['city'],
            'java' => $data['java'],
            'python' => $data['python'],
            'c' => $data['c'],
            'csharp' => $data['csharp'],
            'cplus' => $data['cplus'],
            'php' => $data['php'],
            'html' => $data['html'],
            'css' => $data['css'],
            'javascript' => $data['javascript'],
            'sql' => $data['sql'],
            'unix' => $data['unix'],
            'winserver' => $data['winserver'],
            'windesktop' => $data['windesktop'],
            'linuxdesktop' => $data['linuxdesktop'],
            'macosdesktop' => $data['macosdesktop'],
            'pearl' => $data['pearl'],
            'bash' => $data['bash'],
            'batch' => $data['batch'],
            'cisco' => $data['cisco'],
            'office' => $data['office'],
            'r' => $data['r'],
            'go' => $data['go'],
            'ruby' => $data['ruby'],
            'asp' => $data['asp'],
            'scala' => $data['scala'],
            'password' => bcrypt($data['password'])
        ]);
    }
}
