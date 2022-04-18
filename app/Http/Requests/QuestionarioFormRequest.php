<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionarioFormRequest extends FormRequest
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
            'questionario_item1' => 'required',
            'questionario_item2' => 'required',
            'questionario_item3' => 'required',
            'questionario_item4' => 'required',
            'questionario_item5' => 'required',
            'questionario_item6' => 'required',
            'questionario_item7' => 'required',
            'questionario_item8' => 'required',
            'questionario_item9' => 'required',
            'questionario_item10' => 'required',
            'questionario_item11' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'questionario_item1.required' => 'Questão 1 é obrigatória',
        'questionario_item2.required' => 'Questão 2 é obrigatória',
        'questionario_item3.required' => 'Questão 3 é obrigatória',
        'questionario_item4.required' => 'Questão 4 é obrigatória',
        'questionario_item5.required' => 'Questão 5 é obrigatória',
        'questionario_item6.required' => 'Questão 6 é obrigatória',
        'questionario_item7.required' => 'Questão 7 é obrigatória',
        'questionario_item8.required' => 'Questão 8 é obrigatória',
        'questionario_item9.required' => 'Questão 9 é obrigatória',
        'questionario_item10.required' => 'Questão 10 é obrigatória',
        'questionario_item11.required' => 'Questão 11 é obrigatória',
        ];
    }
}
