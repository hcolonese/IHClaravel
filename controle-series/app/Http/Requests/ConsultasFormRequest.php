<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultasFormRequest extends FormRequest
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
            'data' => 'required',
            'objetivo' => 'required',
            'progresso_obtido1_10' => 'required|min:1',
            'analisePsiGeral1_10' => 'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'nome.min' => 'O nome deve possuir pelo menos 2 caracteres.',
            'cpf.min' => 'O CPF deve possuir pelo menos 11 caracteres.'
        ];
    }
}
