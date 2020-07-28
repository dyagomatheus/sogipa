<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'realization_date', 'coordinator', 'speaker', 'lecture', 'class_hours'];

    public function verses()
    {
        return $this->hasMany('App\Verse');
    }
}
