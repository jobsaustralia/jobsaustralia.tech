<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'state', 'city', 'notifymarketing', 'notifyapply'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'employers';

    protected $primaryKey = 'id';

    public $incrementing = false;
}
