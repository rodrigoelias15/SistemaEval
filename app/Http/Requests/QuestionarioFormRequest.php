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
            // 'nome_avaliador_questionario' => 'required',
            // 'nome_item_digital_questionario' => 'required',
            // 'data_item_digital_questionario' => 'required',
            // 'questionario_item1' => 'required',
            // 'questionario_item2' => 'required',
            // 'questionario_item3' => 'required',
            // 'questionario_item4' => 'required',
            // 'questionario_item5' => 'required',
            // 'questionario_item6' => 'required',
            // 'questionario_item7' => 'required',
            // 'questionario_item8' => 'required',
            // 'questionario_item9' => 'required',
            // 'questionario_item10' => 'required',
            // 'questionario_item11' => 'required',        
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
