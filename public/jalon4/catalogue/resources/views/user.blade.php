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
@endsection