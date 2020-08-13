<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVerse extends FormRequest
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
            'teachers' => 'required',
            'discipline' => 'required',
            'subjects' => 'required',
            'course_id' => 'required',
            'workload' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'teachers.required' => 'Por favor informe o nome do Professor.',
            'discipline.required'  => 'Por favor informe a disciplina.',
            'subjects.required'  => 'Por favor informe o assunto.',
            'course_id.required'  => 'Por favor informe o curso.',
            'workload.required'  => 'Por favor informe a carga Horária.',
        ];
    }
}
