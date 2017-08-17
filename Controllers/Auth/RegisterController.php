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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
            'password' => bcrypt($data['password']),
            'job-title' => $data['job-title'],
			'location' => $data['location'],
            'sector' => $data['sector'],
            'overall-exp' => $data['overall-exp'],

            /* Skills */
            'java' => $data['java'],
            'python' => $data['python'],
            'c' => $data['c'],
            'c-sharp' => $data['c-sharp'],
            'c-plus' => $data['c-plus'],
            'php' => $data['php'],
            'html' => $data['html'],
            'css' => $data['css'],
            'javascript' => $data['javascript'],
            'sql' => $data['sql'],
            'unix' => $data['unix'],
            'win-server' => $data['win-server'],
            'win-desktop' => $data['win-desktop'],
            'linux-desktop' => $data['linux-desktop'],
            'macos-desktop' => $data['macos-desktop'],
            'pearl' => $data['pearl'],
            'bash' => $data['bash'],
            'batch' => $data['batch'],
            'cisco' => $data['cisco'],
            'microsoft-office' => $data['microsoft-office'],
            'r' => $data['r'],
            'go' => $data['go'],
            'ruby' => $data['ruby'],
            'asp' => $data['asp'],
            'scala' => $data['scala'],
        ]);
    }
}
