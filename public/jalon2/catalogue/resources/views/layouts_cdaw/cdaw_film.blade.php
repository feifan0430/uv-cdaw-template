{{-- Laravel Vue --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Fan FEI">
    <meta name="description" content="UV CDAW Jalon2">
    <!-- jquery -->
    <script src='{{ asset("scripts/jquery-3.5.1.min.js") }}'></script>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Accueil style -->
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <title>CDAW Film</title>
</head>
<body>
    <div class="container-fluid" style="margin-bottom: 0%;">
        <div class="row">
            <div class="navbar navbar-default navbar-inverse" role="navigation" style="padding-right: 2%;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        cdawFilm
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('index') }}" class="active">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('explore') }}">Catagories</a>
                        </li>
                        <li>
                            <a href="{{ route('user') }}">Mon espace</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Mon compte  
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Bonjour</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('user') }}">Your Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('signin') }}">Sign in</a>
                                </li>
                                <li>
                                    <a href="#">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-md-4 col-md-push-1" style="height: 40px;">
                <div class="input-group" style="margin-top: 10px;">
                    <input type="text" class="form-control"placeholder="Que vous voulez..." / >
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-search" style="background-color: gray;">cherche</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    @yield('content')
</body>
</html>