<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Socyte') }}</title>
	
</head>
<body>

    <div class="container">	

    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ route('partida.index')}}">Sorteio Socyte</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('jogador.index')}}">Gerenciamento de Jogadores</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('partida.index')}}">Gerenciamento de Partidas</a>
                </li>
                </ul>
            </div>
        </nav>
  
		@yield('content')
	</div>


    <script src="{{ asset('/componentes/js/app.js') }}"></script>
    <script src="{{ asset('/componentes/js/alert.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/componentes/js/button.js') }}"></script>
    <script src="{{ asset('/componentes/js/carousel.js') }}"></script>
    <script src="{{ asset('/componentes/js/collapse.js') }}"></script>
    <script src="{{ asset('/componentes/js/dropdown.js') }}"></script>
    <script src="{{ asset('/componentes/js/index.js') }}"></script>
    <script src="{{ asset('/componentes/js/modal.js') }}"></script>
    <script src="{{ asset('/componentes/js/popover.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/componentes/js/scrollspy.js') }}"></script>
    <script src="{{ asset('/componentes/js/tab.js') }}"></script>
    <script src="{{ asset('/componentes/js/tooltip.js') }}"></script>
    <script src="{{ asset('/componentes/js/util.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/componentes/js/jquery/jquery.inputmask.js') }}"></script>

    <link href="{{ asset('/componentes/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-reboot.css') }}" rel="stylesheet">




</body>
</html>
