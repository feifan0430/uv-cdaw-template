<!-- film -->
    @extends('layouts_cdaw.cdaw_film')
    @section('content')
    <div class="container">
        <div class="row" style="padding-bottom: 1%;">
            <h1>
                {{$title}} ({{$year}})
            </h1>
        </div>

        <div class="row" style="padding-bottom: 2%;">
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-3">
                <img class="img-rounded" src="{{ $image }}" alt="Affiche" width="90%">';
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h4>
                        Director(s): {{$director}}
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Writer(s): {{$writer}}
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Stars: {{$stars}}
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Country: {{$country}}
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Type: {{$type}}
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        Duration: {{$duration}}
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        IMDB Rating: {{$imdb_rating}}
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <h4>
                        Introduction:
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        {{$introduction}}
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <a href="filmlike/{{$imdb_id}}">
                    <button type="submit" style="width: 100%;">
                        @if($is_liked == 'true')
                        Déjà mon favori
                        @elseif($is_liked == 'false')
                        Ajouter à mes favoris
                        @endif
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="filmwatch/{{$imdb_id}}">
                    <button type="submit" style="width: 100%;">
                        @if($is_watched == 'true')
                        Déjà vu
                        @elseif($is_watched == 'false')
                        Pas vu
                        @endif
                    </button>
                </a>
            </div>
            <!-- <div class="col-md-2">
                <button type="submit" style="width: 100%;">
                    Add to Watchlist
                </button>
            </div> -->
        </div>
        <hr style="padding-bottom: 1%;">

        <div class="row">
            <div class="col-md-6">
                <form role="form" method="post" action="{{ route('form.create') }}">
                    @csrf
                    <div class="form-group">
                        <label form="name">
                            <h2>
                                Commentaire
                            </h2>
                        </label>
                        <input type="text" name="imdb_id" value="{{$imdb_id}}" style="visibility: hidden;">
                        <input type="text" name="author" value="{{Auth::user()->name}}" style="visibility: hidden;">
                        <textarea class="form-control" rows="5" name="createcomment"></textarea>
                        <button type="submit" style="margin-top: 2%;">
                            confirmer
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Comment List -->
        @for ($i = 0; $i < $num_commentary; $i++)
                <div class="row" style="margin-top: 5%;">
                    <h2>{{$commentary_read[$i]->author}}</h2>
                    <p>{{$commentary_read[$i]->content}}</p>
                    <button style="margin-top: 1%; margin-right: 1%" class="modify" onclick="modifyjs({{$commentary_read[$i]->id}})">Update Comment</button>
                    <button type="submit" style="margin-top: 1%;" onclick="delete_comment({{$commentary_read[$i]->id}}, '{{$imdb_id}}')">Remove Comment</button>
                </div>
        @endfor

        <div class="row">
            <div class="col-md-6">
                <form id="updateform" method="post" action="{{ route('form.update') }}" style="visibility: hidden; margin-top: 5%;">
                    @csrf
                    <div class="form-group">
                        <label form="name">
                            <h2>
                                Update the comment: 
                            </h2>
                        </label>
                        <input type="text" name="update_imdb_id" value="{{$imdb_id}}" style="visibility: hidden;">
                        <input type="text" id="update_comment_id" name="update_comment_id" value="" style="visibility: hidden;">
                        <input type="text" name="update_author" value="{{Auth::user()->name}}" style="visibility: hidden;">
                        <textarea class="form-control" rows="5" name="update_comment" placeholder="Update the comment..."></textarea>
                        <button type="submit" id="updateform_submit" style="margin-top: 2%;" disabled="disabled">
                            confirmer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">
    @endsection
    
    <script>
        function modifyjs(comment_id) {
            var formnoeud = document.getElementById("updateform");
            formnoeud.style.visibility = "visible";
            var formsubmitnoeud = document.getElementById("updateform_submit");
            formsubmitnoeud.disabled = false;
            var form_media_id_noeud = document.getElementById("update_comment_id");
            form_media_id_noeud.value = comment_id;
        }
    </script>