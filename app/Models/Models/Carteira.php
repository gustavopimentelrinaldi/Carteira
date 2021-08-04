<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    use HasFactory;
    protected $table='carteira';

    protected $fillable = [
        'ativo',
        'cotacao',
        'quantidade',
        'valor',
        'precoLucro',
        'returnOnEquity',
        'valorDividendoAno',
        'dividendYield',
        'dividendYieldEsperado',
        'dividendYieldAlcancado'
    ];
    
}
