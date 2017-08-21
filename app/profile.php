<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model {

  protected $fillable = ['name', 'email', 'title', 'location',
  'sector', 'experience', 'java', 'python', 'c', 'csharp', 'cplus',
   'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver',
   'windesktop', 'linuxdesktop', 'macosdesktop', 'pearl', 'bash',
   'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala', 'password', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
