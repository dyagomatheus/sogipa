<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEssay extends FormRequest
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
            'essay' => 'required|max:5000|min:1000',
            'theme' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'essay.required' => 'Por favor digite sua redação.',
            'essay.max'  => 'Sua redação deve conter no máximo 5000 caracters. Se você utilizou algum estilização de texto, REMOVA!',
            'essay.min'  => 'Sua redação deve conter entre 1000 e 5000 caracters',
            'theme.required'  => 'Por favor informe sobre que texto que você fez a redação.',
        ];
    }
}
