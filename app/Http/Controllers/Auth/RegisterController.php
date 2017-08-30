<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/matches';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'email' => 'required|string|email|max:255|unique:users',
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
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'password' => bcrypt($data['password']),
            'location' => $data['location'],
            'sector' => $data['sector'],
            'experience' => $data['experience'],
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
            'scala' => $data['scala']
        ]);
    }
}
