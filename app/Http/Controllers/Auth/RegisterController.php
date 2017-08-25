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
            'name' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'title' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'sector' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'location' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'experience' => 'required|integer|min:0|max:50',
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
        /* Skill Conditions */
        if(array_key_exists('java', $data)){
            $hasJava = "1";
        }
        else{
            $hasJava = "0";
        }

        if(array_key_exists('python', $data)){
            $hasPython = "1";
        }
        else{
            $hasPython = "0";
        }

        if(array_key_exists('c', $data)){
            $hasC = "1";
        }
        else{
            $hasC = "0";
        }

        if(array_key_exists('csharp', $data)){
            $hasCSharp = "1";
        }
        else{
            $hasCSharp = "0";
        }

        if(array_key_exists('cplus', $data)){
            $hasCPlus = "1";
        }
        else{
            $hasCPlus = "0";
        }

        if(array_key_exists('php', $data)){
            $hasPHP = "1";
        }
        else{
            $hasPHP = "0";
        }

        if(array_key_exists('html', $data)){
            $hasHTML = "1";
        }
        else{
            $hasHTML = "0";
        }

        if(array_key_exists('css', $data)){
            $hasCSS = "1";
        }
        else{
            $hasCSS = "0";
        }

        if(array_key_exists('javascript', $data)){
            $hasJavaScript = "1";
        }
        else{
            $hasJavaScript = "0";
        }

        if(array_key_exists('sql', $data)){
            $hasSQL = "1";
        }
        else{
            $hasSQL = "0";
        }

        if(array_key_exists('unix', $data)){
            $hasUNIX = "1";
        }
        else{
            $hasUNIX = "0";
        }

        if(array_key_exists('winserver', $data)){
            $hasWinServer = "1";
        }
        else{
            $hasWinServer = "0";
        }

        if(array_key_exists('windesktop', $data)){
            $hasWinDesktop= "1";
        }
        else{
            $hasWinDesktop = "0";
        }

        if(array_key_exists('linuxdesktop', $data)){
            $hasLinuxDesktop = "1";
        }
        else{
            $hasLinuxDesktop = "0";
        }

        if(array_key_exists('macosdesktop', $data)){
            $hasMacOsDesktop = "1";
        }
        else{
            $hasMacOsDesktop = "0";
        }

        if(array_key_exists('pearl', $data)){
            $hasPearl = "1";
        }
        else{
            $hasPearl = "0";
        }

        if(array_key_exists('bash', $data)){
            $hasBash = "1";
        }
        else{
            $hasBash = "0";
        }

        if(array_key_exists('batch', $data)){
            $hasBatch = "1";
        }
        else{
            $hasBatch = "0";
        }

        if(array_key_exists('cisco', $data)){
            $hasCisco = "1";
        }
        else{
            $hasCisco = "0";
        }

        if(array_key_exists('office', $data)){
            $hasOffice = "1";
        }
        else{
            $hasOffice= "0";
        }

        if(array_key_exists('r', $data)){
            $hasR = "1";
        }
        else{
            $hasR = "0";
        }

        if(array_key_exists('go', $data)){
            $hasGo = "1";
        }
        else{
            $hasGo = "0";
        }

        if(array_key_exists('ruby', $data)){
            $hasRuby = "1";
        }
        else{
            $hasRuby = "0";
        }

        if(array_key_exists('asp', $data)){
            $hasASP = "1";
        }
        else{
            $hasASP = "0";
        }

        if(array_key_exists('scala', $data)){
            $hasScala = "1";
        }
        else{
            $hasScala = "0";
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'password' => bcrypt($data['password']),
            'location' => $data['location'],
            'sector' => $data['sector'],
            'experience' => $data['experience'],
            'java' => $hasJava,
            'python' => $hasPython,
            'c' => $hasC,
            'csharp' => $hasCSharp,
            'cplus' => $hasCPlus,
            'php' => $hasPHP,
            'html' => $hasHTML,
            'css' => $hasCSS,
            'javascript' => $hasJavaScript,
            'sql' => $hasSQL,
            'unix' => $hasUNIX,
            'winserver' => $hasWinServer,
            'windesktop' => $hasWinDesktop,
            'linuxdesktop' => $hasLinuxDesktop,
            'macosdesktop' => $hasMacOsDesktop,
            'pearl' => $hasPearl,
            'bash' => $hasBash,
            'batch' => $hasBatch,
            'cisco' => $hasCisco,
            'office' => $hasCisco,
            'r' => $hasR,
            'go' => $hasGo,
            'ruby' => $hasRuby,
            'asp' => $hasASP,
            'scala' => $hasScala
        ]);
    }
}
