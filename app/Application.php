<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['userid', 'employerid', 'jobid', 'message'];

    protected $table = 'applications';
}
