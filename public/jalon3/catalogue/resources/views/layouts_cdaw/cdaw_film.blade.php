{{-- Laravel Vue --}}
<?php
// location @laravels {
//         ........................................................
//         add_header Access-Control-Allow-Origin *;
//         add_header Access-Control-Allow-Credentials: true;
// 	    ........................................................
// }

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Fan FEI">
    <meta name="description" content="UV CDAW Jalon2">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- jquery -->
    <script src='{{ asset("scripts/jquery-3.5.1.min.js") }}'></script>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pagefilm.js') }}"></script>
    <!-- Accueil style -->
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/search.css') }}"> -->
    <title>CDAW Film</title>
</head>
<body>
    <div class="container-fluid" style="margin-bottom: 0%;">
        <div class="row">
            <div class="navbar navbar-default navbar-inverse" role="navigation" style="padding-right: 2%;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        cdawFilm
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('index') }}" class="active">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('film_explore_afficher') }}">Catagories</a>
                        </li>
                        <li>
                            <a href="{{ route('searchdefault') }}">Cherche</a>
                        </li>
                        <li>
                            <a href="{{ route('user') }}">Mon espace</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                            @if (Route::has('login'))<li>
                                @auth
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Bonjour, {{ Auth::user()->name }}  
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('useravatar') }}">
                                            {{ __('Avatar') }}
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();" >
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                        </li>            
                                    @else
                                    <li>
                                        <a href="{{ route('login') }}" >Log in</a>
                                    </li>    
                                        @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" >Register</a>
                                        </li>
                                        @endif
                                    @endauth
                            @endif
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 3%;">
        <div class="row">
            <div class="col-md-4 col-md-push-1" style="height: 40px;">
                <form action="{{route('searchcontent')}}">
                    <div class="input-group" style="margin-top: 10px;">
                        <input name="search_content" type="text" class="form-control" placeholder="Que vous voulez..." />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-search" style="background-color: gray;">
                                cherche
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  -->
    @yield('content')

    <!-- FOOTER -->
    <div class="container marketing">
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2021 IMT Nord Europe, UV CDAW, Fan FEI &middot; <a href="#">Contactez moi</a> &middot; <a href="https://ceri-num.gitbook.io/uv-cdaw/">CDAW</a></p>
        </footer>
    </div>
</body>
</html>