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
    <script src="../scripts/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Accueil style -->
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="css/carousel.css">
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
                            <a href="index.html" class="active">Accueil</a>
                        </li>
                        <li>
                            <a href="pages/explore.html">Catagories</a>
                        </li>
                        <li>
                            <a href="pages/user.html">Mon espace</a>
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
                                    <a href="pages/user.html">Your Profile</a>
                                </li>
                                <li>
                                    <a href="pages/signin.html">Sign in</a>
                                </li>
                                <li>
                                    <a href="pages/signup.html">Sign up</a>
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
</body>
</html>