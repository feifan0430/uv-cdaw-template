@extends('layouts_cdaw.cdaw_film')
@section('content')
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row" >
            <p class="profile-header-container">
                <div class="profile-header-img">
                    <img style="width:100px; height:100px; overflow:hidden; object-fit:cover;" class="img-circle center-block" alt="avatar_user" src="{{asset('/storage/'. Auth::user()->avatar)}}" />
                    <!-- badge -->
                    <div class="rank-label-container center-block">
                        <span class="label label-default rank-label center-block" style="width:5%; margin-top:1%">{{$user->name}}</span>
                    </div>
                </div>
            </p>
        </div>
        <div class="row justify-content-center">
            <form action="{{route('update_avatar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group center-block">
                    <input type="file" class="form-control-file center-block" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted center-block" style="text-align:center">Please upload a valid image file. Size of image should not be more than 4MB.</small>
                </div>
                <button type="submit" class="btn btn-primary center-block">Submit</button>
            </form>
        </div>
    </div>
    <hr class="featurette-divider">
@endsection
