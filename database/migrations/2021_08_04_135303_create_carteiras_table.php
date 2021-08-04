<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarteirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carteira', function (Blueprint $table) {
            $table->id();
            $table->string('ativo');
            $table->double('cotacao', 10, 2);
            $table->integer('quantidade');
            $table->double('valor', 10, 3);
            $table->double('precoLucro', 10, 2);
            $table->double('returnOnEquity', 10, 2);
            $table->double('valorDividendoAno', 10, 2);
            $table->double('dividendYield', 10, 2);
            $table->double('dividendYieldEsperado', 10, 2);
            $table->boolean('dividendYieldAlcancado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carteiras');
    }
}
