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
    protected $fillable = ['title', 'description', 'hours', 'salary', 'availablefrom', 'location', 'startdate', 'java', 'python', 'c', 'csharp', 'cplus', 'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver', 'windesktop', 'linuxdesktop', 'macosdesktop', 'pearl', 'bash', 'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala'];

    protected $table = 'jobs';
}
