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

    public static function dateFormat($date)
    {
        
        \Carbon\Carbon::setlocale(LC_TIME, 'pt_BR');
        return \Carbon\Carbon::parse($date)->formatLocalized('%d de %B de %Y');
    }
}
