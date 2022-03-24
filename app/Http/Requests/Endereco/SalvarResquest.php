<?php

namespace App\Htpp\Requests\Endereco;

use Illuminate\Foundation\Http\FormRequest;
use App\Htpp\Requests\Endereco\FormRequest;

class SalvarRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }



    public function rules()
    {
        return [
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
        ];
    }
}