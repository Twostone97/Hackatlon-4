<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPoll extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function polls()
    {
        return $this->hasMany('App\Poll');
    }
}
