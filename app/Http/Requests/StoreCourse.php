<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'realization_date' => 'required',
            'coordinator' => 'required',
            // 'speaker' => 'required',
            'lecture' => 'required',
            'class_hours' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Por favor informe o nome do Curso.',
            'realization_date.required'  => 'Por favor a data de realização.',
            'coordinator.required'  => 'Por favor informe o nome do coordenador.',
            // 'speaker.required'  => 'Por favor informe o nome do palestrante.',
            'lecture.required'  => 'Por favor informe o assunto.',
            'class_hours.required' => 'Por favor informe a quantidade de horas aulas.',
        ];
    }
}
