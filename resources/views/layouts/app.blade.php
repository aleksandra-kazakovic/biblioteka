<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- Styles -->

    <link href="{{ asset('paper/css/paper-kit.css') }}" rel="stylesheet">
    <link href="{{ asset('paper/css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body class="">


<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <h5 class="navbar-brand">Knjige koje vredi pročitati</h5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if(request()->is('book*'))
                    <u class="text-white">
                    <li class="nav-item text-white">
                        <a class="nav-link nav-blue"href="{{ route('home') }}" }}>Početna </a>
                    </li>
                    </u>
                @else
                    <li class="nav-item ">
                        <a class="nav-link  nav-blue"href="{{ route('home') }}" }}>Početna </a>
                    </li>
                @endif
                    @if(request()->is('create*'))
                        <u class="text-white">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('addBook') }}" >Dodaj knjigu</a>
                            </li>
                        </u>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('addBook') }}" >Dodaj knjigu</a>
                        </li>
                    @endif


            </ul>
        </div>
    </div>
</nav>
<main class="py-0">
    @yield('content')
</main>


</body>
</html>

