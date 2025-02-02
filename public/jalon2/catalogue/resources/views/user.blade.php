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
    <style>
        /* Custom Styles */
            ul.nav-tabs{
                width: 140px;
                margin-top: 20px;
                border-radius: 4px;
                border: 1px solid #ddd;
                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
            }
            ul.nav-tabs li{
                margin: 0;
                border-top: 1px solid #ddd;
            }
            ul.nav-tabs li:first-child{
                border-top: none;
            }
            ul.nav-tabs li a{
                margin: 0;
                padding: 8px 16px;
                border-radius: 0;
            }
            ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
                color: #fff;
                background: #0088cc;
                border: 1px solid #0088cc;
            }
            ul.nav-tabs li:first-child a{
                border-radius: 4px 4px 0 0;
            }
            ul.nav-tabs li:last-child a{
                border-radius: 0 0 4px 4px;
            }
            ul.nav-tabs.affix{
                top: 30px; /* Set the top position of pinned element */
            }
        </style>
        <script>
        $(document).ready(function(){
            $("#myNav").affix({
                offset: { 
                    top: 125 
              }
            });
        });
        </script>
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
    <div class="container">
        <div class="row">
            <h2>
                Bonjour, 
            </h2>
        </div>
        <div class="row">
            <div class="jumbotron">
                <h1>Explorez votre liste</h1>
            </div>
            <div class="row">
                <div class="col-xs-3" id="myScrollspy">
                    <ul class="nav nav-tabs nav-stacked" id="myNav">
                        <li class="active"><a href="#section-1">Suivi</a></li>
                        <li><a href="#section-2">Likes</a></li>
                        <li><a href="#section-3">Liste1</a></li>
                        <li><a href="#section-4">Liste2</a></li>
                        <li><a href="#section-5">Liste3</a></li>
                    </ul>
                </div>
                <div class="col-xs-9">
                    <h2 id="section-1" style="padding-bottom: 1%;">
                        Suivi
                    </h2>
                    <div class="row">
                        <div class="col-md-3">
                            <p style="text-align: center;">
                                <img class="img-rounded" src="../images/Bienvenu_chez_les_chtis.jpg" alt="Affiche1" width="150" height="200">
                            </p>
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
                        <div class="col-md-3">
                            <p style="text-align: center;">
                                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                            </p>
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
                        <div class="col-md-3">
                            <p style="text-align: center;">
                                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                            </p>
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
                        <div class="col-md-3">
                            <p style="text-align: center;">
                                <img class="img-rounded" src="#" alt="Affiche1" width="150" height="200">
                            </p>
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
                    </div>
                    <hr>
                    <h2 id="section-2" style="padding-bottom: 1%;">
                        Likes
                    </h2>
                    <hr>
                    <h2 id="section-3" style="padding-bottom: 1%;">
                        Liste1
                    </h2>
                    <hr>
                    <h2 id="section-4" style="padding-bottom: 1%;">
                        Liste2
                    </h2>
                    <hr>
                    <h2 id="section-5" style="padding-bottom: 1%;">
                        Liste3
                    </h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>