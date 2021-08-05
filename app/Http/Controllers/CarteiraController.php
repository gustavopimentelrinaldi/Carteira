<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarteiraRequest;
use Illuminate\Http\Request;
use App\Models\Models\Carteira;

class CarteiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carteira = Carteira::all();
        return view('index', compact('carteira'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carteira = Carteira::all();
        return view('create', compact('carteira'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarteiraRequest $request)
    {
        Carteira::create([
            'ativo' => $request->ativo,
            'cotacao' => $request->cotacao,
            'quantidade' => $request->quantidade,
            'valor' => $request->valor,
            'precoLucro' => $request->precoLucro,
            'returnOnEquity' => $request->returnOnEquity,
            'valorDividendoAno' => $request->valorDividendoAno,
            'dividendYield' => $request->dividendYield,
            'dividendYieldEsperado' => $request->dividendYieldEsperado,
            'dividendYieldAlcancado' => $request->dividendYieldAlcancado,
        ]);

        return  redirect('/carteira');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carteira = Carteira::find($id);
        return view('show', compact('carteira'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
