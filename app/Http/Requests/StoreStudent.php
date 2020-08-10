<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'course_id' => 'required',
            'cpf' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Por favor informe o nome do Aluno', 
            'course_id.required'  => 'Por favor informe o curso.',
            'cpf.required'  => 'Por favor informe o CPF.',
        ];
    }
}
