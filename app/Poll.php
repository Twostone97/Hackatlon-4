<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function user_poll()
    {
        return $this->belongsTo('App\UserPoll', 'user_poll');
    }
}
