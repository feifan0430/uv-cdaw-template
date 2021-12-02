{{-- Laravel Vue --}}
@extends('layouts_cdaw.cdaw_film')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-push-2">
                <a href="{{route('film_explore_effacer')}}">
                    <button style="width: 150px;">
                        <b>
                            Effacer la sélection
                        </b>
                    </button>
                </a>
            </div>
            <!-- <div class="col-md-2">
                <a href="{{route('film_explore_afficher')}}">
                    <button style="width: 120px;">
                        Afficher toutes les films
                    </button>
                </a>
            </div> -->
        </div>
        <!-- Country -->
        <div class="row" style="margin-top: 2%;">
            <div class="col-md-2">
                <button style="width: 120px;">
                    Country
                </button>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_france')}}">
                    <button style="width: 80px;">
                        France
                    </button>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_usa')}}">
                    <button style="width: 80px;">
                        USA
                    </button>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_uk')}}">
                    <button style="width: 80px;">
                        UK
                    </button>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_germany')}}">
                    <button style="width: 80px;">
                        Germany
                    </button>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_italy')}}">
                    <button style="width: 80px;">
                        Italy
                    </button>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_japan')}}">
                    <button style="width: 80px;">
                        Japan
                    </button>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{route('film_explore_spain')}}">
                    <button style="width: 80px;">
                        Spain
                    </button>
                </a>
            </div>
        </div>
        <!-- Year -->
        <div class="row" style="padding-top: 2%;">
            <div class="col-md-2">
                <button type="submit" style="width: 120px;">
                    Year
                </button>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_year_after2010')}}">
                    <button style="width: 150px;">
                        After 2010
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_year_between2000and2009')}}">
                    <button style="width: 150px;">
                        2000-2009
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_year_between1980and1999')}}">
                    <button style="width: 150px;">
                        1980-1999
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_year_before1980')}}">
                    <button style="width: 150px;">
                        Before 1980
                    </button>
                </a>
            </div>
        </div>
        <!-- Director -->
        <div class="row" style="padding-top: 2%;">
            <div class="col-md-2">
                <button style="width: 120px;">
                    Director
                </button>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_christopher_nolan')}}">
                    <button style="width: 150px;">
                        Christopher Nolan
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_coppola')}}">
                    <button style="width: 150px;">
                        Coppola
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_steven_spielberg')}}">
                    <button style="width: 150px;">
                        Steven Spielberg
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('film_explore_hayao_miyazaki')}}">
                    <button style="width: 150px;">
                        Hayao Miyazaki
                    </button>
                </a>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>

    <div class="container">
        @for($i = 1; $i <= 90; $i++)
            @if((DB::select('select * from table_media where id = ?', [$i]))['0']->isshowed == "true")
            <div class="col-md-2" style="margin-bottom: 1%;">
                <p style="text-align: center;">
                    <?php
                    $result_read = DB::select('select * from table_media where id = ?', [$i]);
                    ?>
                    <img class="img-rounded" src="{{$result_read['0']->image}}" alt="Affiche1" width="140" height="210">
                </p>
                
                <h4 style="text-align: center; height: 50px">
                        <!-- $result_read = DB::select('select * from table_media where id = ?', [$i]); -->
                    {{$result_read['0']->title}}
                </h4>
                
                <p style="text-align: center; height: 30px">
                        <!-- $result_read = DB::select('select * from table_media where id = ?', [$i]); -->
                    {{$result_read['0']->director}}
                </p>
                
                <p style="text-align: center;">
                    <a class="btn btn-default" href="film/{{(DB::select('select * from table_media where id = ?', [$i]))['0']->imdb_id}}" role="button">
                        View details
                    </a>
                </p>
            </div>
            @endif
        @endfor
    </div>
    <hr class="featurette-divider">

@endsection