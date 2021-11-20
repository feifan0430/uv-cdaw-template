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
    <title>IDAW Film</title>
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
    <!-- <div class="container-fluid" style="margin-bottom: 2%; background-color: black; width: 100%;">
        <img class="center-block" src="images/inde_chtis_affiche_long.jpg" alt="affiche" height="150px">
    </div> -->
    <!--  -->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=""> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="#" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>
                                Affiche1
                            </h1>
                            <p>
                                TODO: IMDB api
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">
                                    Suite
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="#" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>
                                Affiche2
                            </h1>
                            <p>
                                TODO: IMDB api
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">
                                    Suite
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="#" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>
                                Affiche3
                            </h1>
                            <p>
                                TODO: IMDB api
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">
                                    Suite
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
    </div>
    <!--  -->
    <div class="container marketing">
        <!-- Liste 1 -->
        <div class="row" style="margin-bottom: 2%;">
            <a href="#" style="color: grey;">
                <h2>
                    Nouveau:
                </h2>
            </a>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img class="img-rounded" src="images/Bienvenu_chez_les_chtis.jpg" alt="Affiche1" width="140" height="210">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="pages/film1.html" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="https://imdb-api.com/posters/original/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg" alt="Affiche1" width="140" height="210">
                <h2 style="text-align: center;">
                    Affiche2
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="140" height="210">
                <h2 style="text-align: center;">
                    Affiche3
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="140" height="210">
                <h2 style="text-align: center;">
                    Affiche4
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche5
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche6
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
        </div>
        <!-- Liste 2 -->
        <hr class="featurette-divider">
        <div class="row" style="margin-bottom: 2%;">
            <a href="#" style="color: grey;">
                <h2>
                    Listes de films qui pourraient vous intéresser:
                </h2>
            </a>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche2
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche3
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche4
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche5
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-2">
                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                <h2 style="text-align: center;">
                    Affiche6
                </h2>
                <p>
                    TODO: IMDB api
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
        </div>
        <!-- Recommande -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Recommandé aujourd'hui. 
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">
                    TODO
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" alt="Affiche api">
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider"> -->

        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2021 IMT Nord Europe, UV CDAW, Fan FEI &middot; <a href="#">Contactez moi</a> &middot; <a href="https://ceri-num.gitbook.io/uv-cdaw/">CDAW</a></p>
        </footer>
    </div>
</body>
</html>