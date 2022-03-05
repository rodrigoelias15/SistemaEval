<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstituicaoFormRequest extends FormRequest
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
        return ['nome_instituicao' => 'required', 'endereco_instituicao' => 'required', 'cidade_instituicao' => 'required', 'estado_instituicao' => 'required', 'pais_instituicao' => 'required', 'cep_instituicao' => 'required'];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }
}
