<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDisciplina extends FormRequest
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
            
           // 'matricula', 'nome', 'cpf', 'endereco', 'telefone'=>'required',
           // 'cod_curso', 'ciclo'=>'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Campo com preenchimento obrigatório.'
        ];
    }
}
    

