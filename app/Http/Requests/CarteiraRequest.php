<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarteiraRequest extends FormRequest
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
            'ativo'=>'required|max:6',
            'cotacao'=>'required',
            'quantidade'=>'required',
            'valor'=>'required',
            'precoLucro'=>'required',
            'returnOnEquity'=>'required',
            'valorDividendoAno'=>'required',
            'dividendYield'=>'required',
            'dividendYieldEsperado'=>'required',
            'dividendYieldAlcancado'=>'required'
        ];
    }

    public function messages()
    {
        return [ 
            //validações do campo ativo
            'ativo.required' => 'Coloque o papel!',
            'ativo.size' => 'Ativo deve conter no máximo 6 caracteres',

            //validações do campo cotacao
            'cotacao.required'  => 'Coloque o valor da cotação.',

            //validações do campo quantidade
            'quantidade.required'  => 'Coloque a quantidade de cotas.',

            //validações do campo valor
            'valor.required'  => 'Coloque o valor.',

            //validações do campo precoLucro
            'precoLucro.required'  => 'Coloque o preço sobre lucro.',

            //validações do campo returnOnEquity
            'returnOnEquity.required'  => 'Coloque o valor do ROE.',
            
            //validações do campo valorDividendoAno
            'valorDividendoAno.required'  => 'Coloque o valor do dividendo pago por ano.',

            //validações do campo dividendYield
            'dividendYield.required'  => 'Coloque o dividend yield.',

            //validações do campo dividendYieldEsperado
            'dividendYieldEsperado.required'  => 'Coloque o dividend yield esperado.',

            //validações do campo dividendYieldAlcancado
            'dividendYieldAlcancado.required'  => 'Selecione "Sim" ou "Não" pro campo dividend yield alcançado.'
        ];
    }
}
