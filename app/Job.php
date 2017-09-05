<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = ['title', 'description', 'hours', 'salary', 'availablefrom', 'location', 'state', 'startdate', 'java', 'python', 'c', 'csharp', 'cplus', 'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver', 'windesktop', 'linuxdesktop', 'macosdesktop', 'pearl', 'bash', 'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala'];
=======
    protected $fillable = ['title', 'description', 'hours', 'salary', 'startdate', 'state', 'city', 'java', 'python', 'c', 'csharp', 'cplus', 'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver', 'windesktop', 'linuxdesktop', 'macosdesktop', 'pearl', 'bash', 'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala'];
>>>>>>> origin/master

    protected $table = 'jobs';
}
