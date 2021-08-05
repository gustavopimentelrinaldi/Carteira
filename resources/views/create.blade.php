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
                  <a class="nav-link active" aria-current="page" href="{{url('carteira/create')}}">
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
                  <a href="{{url('carteira/create')}}">
                    <button type="button" class="btn btn-sm btn-primary">Novo</button>
                  </a>
                  <button type="button" class="btn btn-sm btn-warning text-light">Editar</button>
                </div>
              </div>
            </div>
      
            <!-- validação do formulário -->
            @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endforeach
            @endif

            <form method="post" action="{{url('carteira')}}">
                @csrf
                <div class="mb-3">
                  <input class="form-control" type="text" name="ativo" placeholder="Papel Ex: vale3"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="cotacao" placeholder="Valor da cota R$"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="quantidade" placeholder="Quantidade de cotas"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="valor" placeholder="valor possuído R$"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="precoLucro" placeholder="Preço sobre lucro"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="returnOnEquity" placeholder="ROE %"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="valorDividendoAno" placeholder="Valor pago de dividendo por ano R$"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="dividendYield" placeholder="Porcentagem de Dividend Yield %"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="dividendYieldEsperado" placeholder="Quanto você quer de dividend yield? R$"/>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text name="dividendYieldAlcancado" placeholder="alcançou?"/>
                </div>
               <!-- <select name="dividendYieldAlcancado" id="dividendYieldAlcancado">
                    @foreach ($carteira as $carteiras)
                        <option value="{{$carteiras->dividendYieldAlcancado}}"></option>
                    @endforeach
                </select> -->
                <button type="submit" class="btn btn-primary mb-3 col-12">Cadastrar</button>
            </form>
          </main>
        </div>
      </div>
@endsection