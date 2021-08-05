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
            'cotacao'=>'required|numeric',
            'quantidade'=>'required|numeric',
            'valor'=>'required|numeric',
            'precoLucro'=>'required|numeric',
            'returnOnEquity'=>'required|numeric',
            'valorDividendoAno'=>'required|numeric',
            'dividendYield'=>'required|numeric',
            'dividendYieldEsperado'=>'required|numeric',
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
            'cotacao.numeric'  => 'Cotação deve conter apenas valor numérico.',

            //validações do campo quantidade
            'quantidade.required'  => 'Coloque a quantidade de cotas.',
            'quantidade.numeric'  => 'Quantidade deve conter apenas valor numérico.',

            //validações do campo valor
            'valor.required'  => 'Coloque o valor.',
            'valor.numeric'  => 'Valor deve conter apenas valor numérico.',

            //validações do campo precoLucro
            'precoLucro.required'  => 'Coloque o preço sobre lucro.',
            'precoLucro.numeric'  => 'preço/lucro deve conter apenas valor numérico.',

            //validações do campo returnOnEquity
            'returnOnEquity.required'  => 'Coloque o valor do ROE.',
            'returnOnEquity.numeric'  => 'ROE deve conter apenas valor numérico.',
            
            //validações do campo valorDividendoAno
            'valorDividendoAno.required'  => 'Coloque o valor do dividendo pago por ano.',
            'valorDividendoAno.numeric'  => 'Valor de dividendo/ano deve conter apenas valor numérico.',

            //validações do campo dividendYield
            'dividendYield.required'  => 'Coloque o dividend yield.',
            'dividendYield.numeric'  => 'Valor de dividend yield deve conter apenas valor numérico.',

            //validações do campo dividendYieldEsperado
            'dividendYieldEsperado.required'  => 'Coloque o dividend yield esperado.',
            'dividendYieldEsperado.numeric'  => 'Valor de dividend yield esperado deve conter apenas valor numérico.',

            //validações do campo dividendYieldAlcancado
            'dividendYieldAlcancado.required'  => 'Selecione "Sim" ou "Não" pro campo dividend yield alcançado.'
        ];
    }
}
