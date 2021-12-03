@extends('layouts_cdaw.cdaw_film')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-3" style="margin-bottom:2%;">
                <img style="width:150px; height:150px; overflow:hidden; object-fit:cover;" class="img-circle center-block" alt="avatar_user" src="{{asset('/storage/'. Auth::user()->avatar)}}" />
            </div>
            <div class="col col-md-5">
                <h1>
                    Bonjour, {{Auth::user()->name}}
                </h1>
            </div>
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
    <hr class="featurette-divider">
@endsection