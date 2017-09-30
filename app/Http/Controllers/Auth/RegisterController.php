<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Uuid;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

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
            'education' => 'required|integer|min:0|max:5',
            'state' => 'required|string|in:vic,nsw,qld,wa,sa,tas,act,nt,oth',
            'city' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'github' => 'max:40',
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
            'perl' => 'required|boolean',
            'bash' => 'required|boolean',
            'batch' => 'required|boolean',
            'cisco' => 'required|boolean',
            'office' => 'required|boolean',
            'r' => 'required|boolean',
            'go' =>'required|boolean',
            'ruby' => 'required|boolean',
            'asp' => 'required|boolean',
            'scala' => 'required|boolean',
            'cow' => 'required|boolean',
            'actionscript' => 'required|boolean',
            'assembly' => 'required|boolean',
            'autohotkey' => 'required|boolean',
            'coffeescript' => 'required|boolean',
            'd' => 'required|boolean',
            'fsharp' => 'required|boolean',
            'haskell' => 'required|boolean',
            'matlab' => 'required|boolean',
            'objectivec' => 'required|boolean',
            'objectivecplus' => 'required|boolean',
            'pascal' => 'required|boolean',
            'powershell' => 'required|boolean',
            'rust' => 'required|boolean',
            'swift' => 'required|boolean',
            'typescript' => 'required|boolean',
            'vue' => 'required|boolean',
            'webassembly' => 'required|boolean',
            'apache' => 'required|boolean',
            'aws' => 'required|boolean',
            'docker' => 'required|boolean',
            'nginx' => 'required|boolean',
            'saas' => 'required|boolean',
            'ipv4' => 'required|boolean',
            'ipv6' => 'required|boolean',
            'dns' => 'required|boolean',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /* Create user. */
    protected function create(array $data){
        return User::create([
            'id' => Uuid::generate(),
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'sector' => $data['sector'],
            'experience' => $data['experience'],
            'education' => $data['education'],
            'state' => $data['state'],
            'city' => $data['city'],
            'github' => $data['github'],
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
            'perl' => $data['perl'],
            'bash' => $data['bash'],
            'batch' => $data['batch'],
            'cisco' => $data['cisco'],
            'office' => $data['office'],
            'r' => $data['r'],
            'go' => $data['go'],
            'ruby' => $data['ruby'],
            'asp' => $data['asp'],
            'scala' => $data['scala'],
            'cow' => $data['cow'],
            'actionscript' => $data['actionscript'],
            'assembly' => $data['assembly'],
            'autohotkey' => $data['autohotkey'],
            'coffeescript' => $data['coffeescript'],
            'd' => $data['d'],
            'fsharp' => $data['fsharp'],
            'haskell' => $data['haskell'],
            'matlab' => $data['matlab'],
            'objectivec' => $data['objectivec'],
            'objectivecplus' => $data['objectivecplus'],
            'pascal' => $data['pascal'],
            'powershell' => $data['powershell'],
            'rust' => $data['rust'],
            'swift' => $data['swift'],
            'typescript' => $data['typescript'],
            'vue' => $data['vue'],
            'webassembly' => $data['webassembly'],
            'apache' => $data['apache'],
            'aws' => $data['aws'],
            'docker' => $data['docker'],
            'nginx' => $data['nginx'],
            'saas' => $data['saas'],
            'ipv4' => $data['ipv4'],
            'ipv6' => $data['ipv6'],
            'dns' => $data['dns'],
            'password' => bcrypt($data['password'])
        ]);
    }
}
