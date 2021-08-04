@extends('templates.template')
@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>

    @foreach ($carteira as $carteiras)
        <tr>
            <th scope="row">{{$carteiras->ativo}}</th>
            <td>R$ {{$carteiras->cotacao}}0</td>
            <td>{{$carteiras->quantidade}}</td>
            <td>R$ {{$carteiras->valor}}</td>
            <td>{{$carteiras->precoLucro}}</td>
            <td>{{$carteiras->returnOnEquity}}%</td>
            <td>R$ {{$carteiras->valorDividendoAno}}</td>
            <td>{{$carteiras->dividendYield}}%</td>
            <td>{{$carteiras->dividendYieldEsperado}}%</td>
            @if ($carteiras->dividendYieldAlcancado === 0)
                <td>Não</td>
                @elseif ($carteiras->dividendYieldAlcancado === 1)
                <td>Sim</td>
            @endif
        </tr>
    @endforeach
@endsection