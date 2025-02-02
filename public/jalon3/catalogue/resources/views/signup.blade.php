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
    <!-- Accueil style -->
    <!-- <link rel="stylesheet" href="../css/carousel.css"> -->
    <!-- <link rel="stylesheet" href="../css/signin.css"> -->
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

    <!-- Sign in -->
    <div class="container" style="padding-top: 8%;">
        <div class="col-md-6 col-md-push-3">
            <form class="form-signin">
                <h2 class="form-signin-heading">Please sign up</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required style="margin-top: 1%;">
                <label for="inputPassword" class="sr-only">Repeat Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Repeat Password" required style="margin-top: 1%;">
                <!-- <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 1%;">Sign up</button>
            </form>
        </div>
    </div>
</body>