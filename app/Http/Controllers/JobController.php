<?php

namespace App\Http\Controllers;

use App\Application;
use App\Employer;
use App\Job;

use Auth;

use App\Http\Controllers\Controller;

class JobController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Show matches page. */
    public function matchIndex(){
        return view('matches');
    }

    /* Show job page by ID. */
    public function jobIndex($id){
        $job = Job::findOrFail($id);

        $title = $job->title;
        $description = $job->description;
        $term = $job->term;
        $hours = $job->hours;
        $salary = $job->salary;
        $rate = $job->rate;
        $startdate = $job->startdate;
        $state = $job->state;
        $city = $job->city;
		$java = $job->java;
        $python = $job->python;
        $c = $job->c;
        $csharp = $job->csharp;
        $cplus = $job->cplus;
        $php = $job->php;
        $html = $job->html;
        $css = $job->css;
        $javascript = $job->javascript;
        $sql = $job->sql;
        $unix = $job->unix;
        $winserver = $job->winserver;
        $windesktop = $job->windesktop;
        $linuxdesktop = $job->linuxdesktop;
        $macosdesktop = $job->macosdesktop;
        $perl = $job->perl;
        $bash = $job->bash;
        $batch = $job->batch;
        $cisco = $job->cisco;
        $office = $job->office;
        $r = $job->r;
        $go = $job->go;
        $ruby = $job->ruby;
        $asp = $job->asp;
        $scala = $job->scala;
        $cow = $job->cow;
        $actionscript = $job->actionscript;
        $assembly = $job->assembly;
        $autohotkey = $job->autohotkey;
        $coffeescript = $job->coffeescript;
        $d = $job->d;
        $fsharp = $job->fsharp;
        $haskell = $job->haskell;
        $matlab = $job->matlab;
        $objectivec = $job->objectivec;
        $objectivecplus = $job->objectivecplus;
        $pascal = $job->pascal;
        $powershell = $job->powershell;
        $rust = $job->rust;
        $swift = $job->swift;
        $typescript = $job->typescript;
        $vue = $job->vue;
        $webassembly = $job->webassembly;
        $apache = $job->apache;
        $aws = $job->aws;
        $docker = $job->docker;
        $nginx = $job->nginx;
        $saas = $job->saas;
        $ipv4 = $job->ipv4;
        $ipv6 = $job->ipv6;
        $dns = $job->dns;
        $employerid = $job->employerid;
        $employer = Employer::findOrFail($employerid);

        $employername = $employer->name;

        /* Count the number of times the job seeker has applied to the job. */
        $count = Application::where('jobid', $id)->where('userid', Auth::user()->id)->get()->count();

        return view("job", ["id"=>$id, "title"=>$title, "description"=>$description, "term"=>$term, "hours"=>$hours, "salary"=>$salary, "rate"=>$rate, "startdate"=>$startdate, "state"=>$state, "city"=>$city, "count"=>$count, "employername"=>$employername, "employerid"=>$employerid, "java"=>$java, "python"=>$python, "c"=>$c, "csharp"=>$csharp, "cplus"=>$cplus, "php"=>$php, "html"=>$html, "css"=>$css, "javascript"=>$javascript, "sql"=>$sql, "unix"=>$unix, "winserver"=>$winserver, "windesktop"=>$windesktop, "linuxdesktop"=>$linuxdesktop, "macosdesktop"=>$macosdesktop, "perl"=>$perl, "bash"=>$bash, "batch"=>$batch, "cisco"=>$cisco, "office"=>$office, "r"=>$r, "go"=>$go, "ruby"=>$ruby, "asp"=>$asp, "scala"=>$scala, "cow"=>$cow, "actionscript"=>$actionscript, "assembly"=>$assembly, "autohotkey"=>$autohotkey, "coffeescript"=>$coffeescript, "d"=>$d, "fsharp"=>$fsharp, "haskell"=>$haskell, "matlab"=>$matlab, "objectivec"=>$objectivec, "objectivecplus"=>$objectivecplus, "pascal"=>$pascal, "powershell"=>$powershell, "rust"=>$rust, "swift"=>$swift, "typescript"=>$typescript, "vue"=>$vue, "webassembly"=>$webassembly, "apache"=>$apache, "aws"=>$aws, "docker"=>$docker, "nginx"=>$nginx, "saas"=>$saas, "ipv4"=>$ipv4, "ipv6"=>$ipv6, "dns"=>$dns]);
    }

    function employerProfile($id){
        $employer = Employer::findOrFail($id);

        $id = $employer->id;
        $name = $employer->name;
        $state = $employer->state;
        $city = $employer->city;

        return view("employer", ["id"=>$id, "name"=>$name, "state"=>$state, "city"=>$city]);
    }
}
