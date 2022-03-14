<?php

namespace App\Http\Requests;

use Faker\Guesser\Name;
use Illuminate\Foundation\Http\FormRequest;
use PharIo\Manifest\Email;

class AutenticacaoFormRequest extends FormRequest
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
            'email' => 'unique:users,email',
        ];
    }

    public function messages()
    {
        return[
            'email.unique' => 'E-mail já cadastrado'
        ];
    }
}
