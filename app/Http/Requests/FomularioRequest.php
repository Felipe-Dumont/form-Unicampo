<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FomularioRequest extends FormRequest
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
            'fullname' => 'required|regex:/^[a-zA-Z ]+$/',
            'birth' => 'required',
            'email' => 'required|email',
            'pessoa' => 'required',
            'cpfcnpj' => 'required',
            'cep' => 'required',
            'street' => 'required',
            'number' => 'required',
            'city' => 'required',
            'state' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'O nome deve ser especificado!',
            'fullname.regex' => 'O nome não pode conter numero!',
            'birth.required' => 'A data de nascimento deve ser especificado!',
            'email.required' => 'O email deve ser especificado!',
            'pessoa.required' => 'Especifique o tipo de pessoa',
            'email.email' => 'E-mail não valido!',
            'cpfcnpj.required' => 'O CPF ou CNPJ deve ser especificado!',
            'cep.required' => 'O CEP deve ser especificado!',
            'street.required' => 'A rua deve ser especificado!',
            'number.required' => 'O numero deve ser especificado!',
            'city.required' => 'A cidade deve ser especificado!',
            'state.required' => 'Especifique o UF!'
        ];
    }
}
