@extends('templates.template')
@section('content')
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Rinaldi wallet</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sair</a>
          </div>
        </div>
      </header>
      
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Novo Ativo
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
              <h1 class="h2">Novo ativo</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <a href="{{url('carteira/novo-ativo')}}">
                    <button type="button" class="btn btn-sm btn-primary">Novo</button>
                  </a>
                  <button type="button" class="btn btn-sm btn-warning text-light">Editar</button>
                </div>
              </div>
            </div>
      
            <form name="formCad" id="formCad" method="post" action="{{url('carteira')}}">
                @csrf
                <input type="text" name="ativo" id="ativo" placeholder="Papel"/>
                <input type="number" name="cotacao" id="cotacao" placeholder="Valor da cota"/>
                <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade de cotas"/>
                <input type="number" name="valor" id="valor" placeholder="valor possuído"/>
                <input type="number" name="precoLucro" id="precoLucro" placeholder="Preço sobre lucro"/>
                <input type="number" name="returnOnEquity" id="returnOnEquity" placeholder="ROE"/>
                <input type="number" name="valorDividendoAno" id="valorDividendoAno" placeholder="Valor pago de dividendo por ano"/>
                <input type="number" name="dividendYield" id="dividendYield" placeholder="Porcentagem de Dividend Yield"/>
                <input type="number" name="dividendYieldEsperado" id="dividendYieldEsperado" placeholder="Quanto você quer de dividend yield?"/>
                <input type="number" name="dividendYieldAlcancado" id="dividendYieldAlcancado" placeholder="alcançou?"/>
               <!-- <select name="dividendYieldAlcancado" id="dividendYieldAlcancado">
                    @foreach ($carteira as $carteiras)
                        <option value="{{$carteiras->dividendYieldAlcancado}}"></option>
                    @endforeach
                </select> -->
                <button type="submit">Enviar</button>
            </form>
          </main>
        </div>
      </div>
@endsection