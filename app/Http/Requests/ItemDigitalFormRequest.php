<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemDigitalFormRequest extends FormRequest
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
            'nome_item_digital' => 'required',
            'area_item_digital' => 'required',
            'escolaridade_item_digital' => 'required',
            'descricao_item_digital' => 'required',
            'nome_avaliacao_item_digital' => 'required',
            'ano_item_digital' => 'required',
            'nome_instituicao' => 'required',
            'plataforma_item_digital' => 'required',
            'instituicao_plataforma' => 'required',
            'instituicao_item_digital' => 'required',         
        ];
    }

    public function messages()
    {
        return [
            'nome_item_digital.required' => 'Nome do Item Digital é obrigatório',
            'area_item_digital.required' => 'Área do Item Digital é obrigatório',
            'escolaridade_item_digital.required' => 'Nível de escolaridade do Item Digital é obrigatório',
            'descricao_item_digital.required' => 'Descrição para o Item Digital é obrigatório',
            'nome_avaliacao_item_digital.required' => 'Nome da avaliação do Item Digital é obrigatória',
            'ano_item_digital.required' => 'Ano do Item Digital é obrigatório',
            'nome_instituicao.required' => 'Nome da Instituição que usa Item Digital é obrigatório',
            'plataforma_item_digital.required' => 'Plataforma em que o Item está armazenado é obrigatório',
            'instituicao_plataforma.required' => 'Instituição responsável pela plataforma é obrigatório',
            'instituicao_item_digital.required' => 'Instituição que desenvolveu item digital é obrigatório',            
        ];
    }

}
