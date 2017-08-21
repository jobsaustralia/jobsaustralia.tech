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
            $hasJava = "true";
        }
        else{
            $hasJava = "false";
        }

        if(array_key_exists('python', $data)){
            $hasPython = "true";
        }
        else{
            $hasPython = "false";
        }

        if(array_key_exists('c', $data)){
            $hasC = "true";
        }
        else{
            $hasC = "false";
        }

        if(array_key_exists('csharp', $data)){
            $hasCSharp = "true";
        }
        else{
            $hasCSharp = "false";
        }

        if(array_key_exists('cplus', $data)){
            $hasCPlus = "true";
        }
        else{
            $hasCPlus = "false";
        }

        if(array_key_exists('php', $data)){
            $hasPHP = "true";
        }
        else{
            $hasPHP = "false";
        }

        if(array_key_exists('html', $data)){
            $hasHTML = "true";
        }
        else{
            $hasHTML = "false";
        }

        if(array_key_exists('css', $data)){
            $hasCSS = "true";
        }
        else{
            $hasCSS = "false";
        }

        if(array_key_exists('javascript', $data)){
            $hasJavaScript = "true";
        }
        else{
            $hasJavaScript = "false";
        }

        if(array_key_exists('sql', $data)){
            $hasSQL = "true";
        }
        else{
            $hasSQL = "false";
        }

        if(array_key_exists('unix', $data)){
            $hasUNIX = "true";
        }
        else{
            $hasUNIX = "false";
        }

        if(array_key_exists('winserver', $data)){
            $hasWinServer = "true";
        }
        else{
            $hasWinServer = "false";
        }

        if(array_key_exists('windesktop', $data)){
            $hasWinDesktop= "true";
        }
        else{
            $hasWinDesktop = "false";
        }

        if(array_key_exists('linuxdesktop', $data)){
            $hasLinuxDesktop = "true";
        }
        else{
            $hasLinuxDesktop = "false";
        }

        if(array_key_exists('macosdesktop', $data)){
            $hasMacOsDesktop = "true";
        }
        else{
            $hasMacOsDesktop = "false";
        }

        if(array_key_exists('pearl', $data)){
            $hasPearl = "true";
        }
        else{
            $hasPearl = "false";
        }

        if(array_key_exists('bash', $data)){
            $hasBash = "true";
        }
        else{
            $hasBash = "false";
        }

        if(array_key_exists('batch', $data)){
            $hasBatch = "true";
        }
        else{
            $hasBatch = "false";
        }

        if(array_key_exists('cisco', $data)){
            $hasCisco = "true";
        }
        else{
            $hasCisco = "false";
        }

        if(array_key_exists('office', $data)){
            $hasOffice = "true";
        }
        else{
            $hasOffice= "false";
        }

        if(array_key_exists('r', $data)){
            $hasR = "true";
        }
        else{
            $hasR = "false";
        }

        if(array_key_exists('go', $data)){
            $hasGo = "true";
        }
        else{
            $hasGo = "false";
        }

        if(array_key_exists('ruby', $data)){
            $hasRuby = "true";
        }
        else{
            $hasRuby = "false";
        }

        if(array_key_exists('asp', $data)){
            $hasASP = "true";
        }
        else{
            $hasASP = "false";
        }

        if(array_key_exists('scala', $data)){
            $hasScala = "true";
        }
        else{
            $hasScala = "false";
        }

          $user = User::create([
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
          Profile::create(['user_id' => $user->id]);
        return $user;
    }
}
