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
        $month = date('m', strtotime($date));
        $day = date('d', strtotime($date));
        $year = date('Y', strtotime($date));

        switch ($month) {
            case 1:
                $month = 'Janeiro';
                break;
            case 2:
                $month = 'Fevereiro';
                break;
            case 3:
                $month = 'Março';
                break;
            case 4:
                $month = 'Abril';
                break;
            case 5:
                $month = 'Maio';
                break;
            case 6:
                $month = 'Junho';
                break;
            case 7:
                $month = 'Julho';
                break;
            case 8:
                $month = 'Agosto';
                break;
            case 9:
                $month = 'Setembro';
                break;
            case 10:
                $month = 'Outubro';
                break;
            case 11:
                $month = 'Novembro';
                break;
            case 12:
                $month = 'Dezembro';
                break;
        }
        $str_date = $day. ' de ' . $month . ' de ' . $year;

        
        return $str_date;
    }
}
