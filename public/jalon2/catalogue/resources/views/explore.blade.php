{{-- Laravel Vue --}}
@extends('layouts.cdaw_film')
@section('content')
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
@endsection