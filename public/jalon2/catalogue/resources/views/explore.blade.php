<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Fan FEI">
    <meta name="description" content="UV CDAW Jalon1">
    <!-- jquery -->
    <script src='{{ asset("scripts/jquery-3.5.1.min.js") }}'></script>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Explore style -->
    <link rel="stylesheet" href="{{ asset('css/star-rating.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Explore JavaScript -->
    <script src="{{ asset('js/star-rating.js') }}"></script>
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
                                    <a href="{{ route('signup') }}">Sign up</a>
                                </li>
                                <li class="divider"></li>
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
    
    <div class="container">
        <div class="row">
            <span class="heading">
                Films
            </span>
        </div>
        <!-- Classification -->
        <div class="row" style="padding-top: 1%;">
            <div class="col-md-2">
                <button type="submit" style="width: 120px;">
                    Classification:
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata1
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata2
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata3
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata4
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata5
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata6
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    cata7
                </button>
            </div>
            <!-- <div class="col-md-1 col-md-push-1">
                <img src="../images/inde_chtis.jpg" alt="AD" width="200px">
            </div> -->
        </div>
        <!-- Région -->
        <div class="row" style="padding-top: 2%;">
            <div class="col-md-2">
                <button type="submit" style="width: 120px;">
                    Région:
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    France
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    Chine
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    Amérique
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    Autre
                </button>
            </div>
        </div>
        <!-- Années -->
        <div class="row" style="padding-top: 2%;">
            <div class="col-md-2">
                <button type="submit" style="width: 120px;">
                    Années:
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    2021
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    2020
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    2010/19
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    2000/09
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 80px;">
                    avant
                </button>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <!-- <label for="input-4" class="control-label">Rate This</label> -->
        <!-- <input id="input-4" name="input-4" class="rating rating-loading" data-show-clear="false" data-show-caption="true"> -->
        <!-- <input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-size="lg" > -->
        <div class="row" style="padding-bottom: 3%;">
            <div class="col-md-3">
                <p style="text-align: center;">
                    <img class="img-rounded" src="../images/Bienvenu_chez_les_chtis.jpg" alt="Affiche1" width="180" height="240">
                </p>
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="film1.html" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
        </div>

        <div class="row" style="padding-bottom: 3%;">
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
        </div>

        <div class="row" style="padding-bottom: 3%;">
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <img class="img-rounded" src="images/inde_chtis.jpg" alt="Affiche1" width="180" height="240">
                <h2 style="text-align: center;">
                    Affiche1
                </h2>
                <p style="text-align: center;">
                    TODO: IMDB api
                    <br>
                    User Rating
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="#" role="button">
                        View details
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>