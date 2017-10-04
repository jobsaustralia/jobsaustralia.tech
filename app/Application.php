<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'userid', 'employerid', 'jobid', 'message', 'rejected', 'engaged'];

    protected $table = 'applications';

    protected $primaryKey = 'id';

    public $incrementing = false;
}
