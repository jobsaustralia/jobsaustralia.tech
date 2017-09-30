<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'title', 'description', 'term', 'hours', 'salary', 'rate', 'startdate', 'state', 'city', 'java', 'python', 'c', 'csharp', 'cplus', 'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver', 'windesktop', 'linuxdesktop', 'macosdesktop', 'perl', 'bash', 'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala', 'cow', 'actionscript', 'assembly', 'autohotkey', 'coffeescript', 'd', 'fsharp', 'haskell', 'matlab', 'objectivec', 'objectivecplus', 'pascal', 'powershell', 'rust', 'swift', 'typescript', 'vue', 'webassembly', 'apache', 'aws', 'docker', 'nginx', 'saas', 'ipv4', 'ipv6', 'dns', 'mineducation', 'minexperience', 'rankone', 'ranktwo', 'rankthree', 'employerid'];

    protected $table = 'jobs';

    protected $primaryKey = 'id';

    public $incrementing = false;
}
