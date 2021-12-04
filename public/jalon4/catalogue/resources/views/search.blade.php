{{-- Laravel Vue --}}
@extends('layouts.cdaw_film')
@section('content')
    <div class="container">
        @for($i = 1; $i <= 90; $i++)
            @if((DB::select('select * from medias where id = ?', [$i]))['0']->is_showed == "true")
            <div class="col-md-2" style="margin-bottom: 1%;">
                <p style="text-align: center;">
                    <?php
                    $result_read = DB::select('select * from medias where id = ?', [$i]);
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
                    <a class="btn btn-default" href="film/{{(DB::select('select * from medias where id = ?', [$i]))['0']->imdb_id}}" role="button">
                        View details
                    </a>
                </p>
            </div>
            @endif
        @endfor
    </div>
    <hr class="featurette-divider">
@endsection