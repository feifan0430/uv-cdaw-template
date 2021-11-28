{{-- Laravel Vue --}}
{{-- index --}}
    @extends('layouts_cdaw.cdaw_film')
    @section('content')
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

        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2021 IMT Nord Europe, UV CDAW, Fan FEI &middot; <a href="#">Contactez moi</a> &middot; <a href="https://ceri-num.gitbook.io/uv-cdaw/">CDAW</a></p>
        </footer>
    </div>
    @endsection