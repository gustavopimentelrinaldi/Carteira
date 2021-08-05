@extends('templates.template')
@section('content')
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{url('carteira')}}">Rinaldi wallet</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      </header>
      
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
      
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Usuários</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="/lista-de-usuarios">
                    <span data-feather="file-text"></span>
                    Lista
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Visualizar registro</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-primary">Novo</button>
                  <button type="button" class="btn btn-sm btn-warning text-light">Editar</button>
                </div>
              </div>
            </div>
            
            <div class="table-responsive">
                @php
                    $carteira->find($carteira->id);
                @endphp
              <table class="table table-striped table-sm" id="tabela">
                <thead>
                  <tr>
                    <th scope="col">Ativo</th>
                    <th scope="col">Cotação</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">P/L</th>
                    <th scope="col">ROE</th>
                    <th scope="col">Dividendo pago/ano</th>
                    <th scope="col">Dividend Yield</th>
                    <th scope="col">DY esperado</th>
                    <th scope="col">DY alcançado</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$carteira->ativo}}</th>
                        <td>R$ {{$carteira->cotacao}}0</td>
                        <td>{{$carteira->quantidade}}</td>
                        <td>R$ {{$carteira->valor}}</td>
                        <td>{{$carteira->precoLucro}}</td>
                        <td>{{$carteira->returnOnEquity}}%</td>
                        <td>R$ {{$carteira->valorDividendoAno}}</td>
                        <td>{{$carteira->dividendYield}}%</td>
                        <td>{{$carteira->dividendYieldEsperado}}%</td>
                        @if ($carteira->dividendYieldAlcancado === 0)
                            <td>Não</td>
                            @elseif ($carteira->dividendYieldAlcancado === 1)
                            <td>Sim</td>
                        @endif
                    </tr>
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
@endsection