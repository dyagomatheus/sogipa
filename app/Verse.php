<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    protected $fillable = ['teachers', 'discipline', 'subjects', 'course_id', 'workload'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
