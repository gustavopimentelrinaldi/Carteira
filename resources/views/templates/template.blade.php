<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
</head>
<body>
    @yield('content')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scriptDelete.js') }}"></script>
    <script src="{{ asset('js/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('js/inputmask.js') }}"></script>
    <script src="{{ asset('js/inputmask.binding.js') }}"></script>
    
    @yield('script') 
</body>
</html>