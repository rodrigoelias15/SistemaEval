<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvaliadorFormRequest extends FormRequest
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
            'nome_avaliador' => 'required',
            'sobrenome_avaliador' => 'required',
            'endereco_avaliador' => 'required',
            'cidade_avaliador' => 'required',
            'cpf_avaliador' => 'required',
            'instituicao_avaliador' => 'required',
            'estado_avaliador' => 'required',
            'cep_avaliador' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'nome_avaliador.required' => 'O campo Nome é obrigatório',
            'sobrenome_avaliador.required' => 'O campo Sobrenome é obrigatório',
            'endereco_avaliador.required' => 'O campo Endereço é obrigatório',
            'cidade_avaliador.required' => 'O campo Cidade é obrigatório',
            'cpf_avaliador.required' => 'O campo CPF é obrigatório',
            'instituicao_avaliador.required' => 'O campo Instituição é obrigatório',
            'estado_avaliador.required' => 'O campo Estado é obrigatório',
            'cep_avaliador.required' => 'O campo CEP é obrigatório',
        ];
    }

}
