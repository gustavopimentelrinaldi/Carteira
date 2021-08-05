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
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{url('carteira')}}">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
              </ul>
      
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Usuários</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('lista-de-usuarios')}}">
                    <span data-feather="file-text"></span>
                    Lista
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <a href="{{url('carteira/create')}}">
                    <button type="button" class="btn btn-sm btn-primary">Novo</button>
                  </a>
                </div>
              </div>
            </div>
      
            <div class="table-responsive">
              @csrf
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
                    <th scope="col">Ações</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carteira as $carteiras)
                    <tr>
                        <th scope="row">{{$carteiras->ativo ?? ''}}</th>
                        <td>R$ {{$carteiras->cotacao ?? ''}}0</td>
                        <td>{{$carteiras->quantidade ?? ''}}</td>
                        <td>R$ {{$carteiras->valor ?? ''}}</td>
                        <td>{{$carteiras->precoLucro ?? ''}}</td>
                        <td>{{$carteiras->returnOnEquity ?? ''}}%</td>
                        <td>R$ {{$carteiras->valorDividendoAno ?? ''}}</td>
                        <td>{{$carteiras->dividendYield ?? ''}}%</td>
                        <td>{{$carteiras->dividendYieldEsperado ?? ''}}%</td>
                        @if ($carteiras->dividendYieldAlcancado === 0)
                            <td>Não</td>
                            @elseif ($carteiras->dividendYieldAlcancado === 1)
                            <td>Sim</td>
                        @endif
                        <td>
                          <a href="{{url("carteira/$carteiras->id/edit")}}"">
                            <button type="button" class="btn btn-sm btn-info text-white">Editar</button>
                          </a>
                        </td>
                        <td>
                          <a href="{{url("carteira/$carteiras->id")}}"">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                              </svg>
                            </button>
                          </a>
                        </td>
                        <td>
                          <a href="{{url("carteira/$carteiras->id")}}"" class="js-del">
                            <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                          </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
@endsection