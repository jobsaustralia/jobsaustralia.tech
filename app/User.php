<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job-title', 'location', 'sector', 'overall-exp', 'java', 'python', 'c', 'c-sharp', 'c-plus', 'php',
        'html', 'css', 'javascript', 'sql', 'unix', 'win-server', 'win-desktop', 'linux-desktop', 'macos-desktop', 'pearl', 'bash', 'batch',
        'cisco', 'microsoft-office', 'r', 'go', 'ruby', 'asp', 'scala',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
