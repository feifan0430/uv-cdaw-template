@extends('layouts.cdaw_film')
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
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="container">
        <div class="row" style="margin-bottom: 3%;">
            <h2>
                Mes favoris
            </h2>
        </div>
        <div class="row">
            <?php
            $num_like = DB::table('favorites')
                            ->where('id_user', Auth::user()->id)
                            ->count('id');
            ?>
            @for ($i = 0; $i < $num_like; $i++)
            <div class="col-md-2" style="margin-bottom: 1%;">
                <p style="text-align: center;">
                    <?php
                    $result_read = DB::select('select * from favorites where id_user = ?', [Auth::user()->id]);
                    $result_read = $result_read[$i];
                    $imdb_id = $result_read->id_media;
                    $result_read = DB::select('select * from medias where imdb_id = ?', [$imdb_id]);
                    ?>
                    <img class="img-rounded" src="{{$result_read['0']->image}}" alt="Affiche1" width="140" height="210">
                </p>
                <h4 style="text-align: center; height: 50px">
                    {{$result_read['0']->title}}
                </h4>
                <p style="text-align: center; height: 30px">
                    {{$result_read['0']->director}}
                </p>
                <p style="text-align: center;">
                    <a class="btn btn-default" href="film/{{$imdb_id}}" role="button">
                        View details
                    </a>
                </p>
            </div>
            @endfor
        </div>
    </div>
    <hr class="featurette-divider">
@endsection