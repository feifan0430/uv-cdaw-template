<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Fan FEI">
    <meta name="description" content="UV CDAW Jalon1">
    <!-- jquery -->
    <script src="../scripts/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- User style -->
    <!-- <link rel="stylesheet" href="../css/carousel.css"> -->
    <link rel="stylesheet" href="../css/user-rating.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="row" style="padding-bottom: 1%;">
            <h1>
                Bienvenu chez les Ch'tis (2008)
            </h1>
        </div>

        <div class="row" style="padding-bottom: 2%;">
            <div class="col-md-3">
                <img src="../images/Bienvenu_chez_les_chtis.jpg" alt="Affiche" width="80%">
            </div>
            <div class="col-md-5">
                <div class="row">
                    <h4>
                        De: Dany Boon
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Par: Dany Boon, Franck Magnier
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Avec: Kad Merad, Dany Boon, Zoé Félix
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Date: 20 février 2008 en salle
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Durée: 1 h 46 min
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Classification: Comédie
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <span class="heading">User Rating</span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p>
                    4.1 average based on 254 reviews.
                </p>
                <hr style="border:3px solid #f1f1f1">
                <div class="row">
                    <div class="side">
                        <div>
                            5 star
                        </div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-5"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>150</div>
                    </div>
                    <div class="side">
                        <div>4 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-4"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>63</div>
                    </div>
                    <div class="side">
                        <div>3 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-3"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>15</div>
                    </div>
                    <div class="side">
                        <div>2 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-2"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>6</div>
                    </div>
                    <div class="side">
                        <div>1 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-1"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>20</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <button type="submit" style="width: 100%;">
                    Suivi
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 100%;">
                    Like
                </button>
            </div>
            <div class="col-md-2">
                <button type="submit" style="width: 100%;">
                    Add to Watchlist
                </button>
            </div>
        </div>
        <hr style="padding-bottom: 1%;">

        <div class="row">
            <div class="col-md-6">
                <form role="form">
                    <div class="form-group">
                        <label form="name">
                            <h2>
                                Commentaire
                            </h2>
                        </label>
                        <textarea class="form-control" rows="5"></textarea>
                        <button type="submit" style="margin-top: 2%;">
                            confirmer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>