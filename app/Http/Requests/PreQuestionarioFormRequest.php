<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreQuestionarioFormRequest extends FormRequest
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
            'nome_avaliador_questionario' => 'required',
            'nome_item_digital_questionario' => 'required',
            'data_item_digital_questionario' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
        'nome_avaliador_questionario.required' => 'Nome do Avaliador é obrigatório',
        'nome_item_digital_questionario.required' => 'Nome do Item Digital é obrigatório',
        'data_item_digital_questionario.required' => 'Data é obrigatória',
        ];
    }
}
