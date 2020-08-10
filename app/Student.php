<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'validation_code', 'cpf', 'course_id'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
