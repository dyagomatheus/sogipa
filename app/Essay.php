<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    protected $fillable = ['essay', 'user_id', 'status', 'start_time', 'time_left'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
