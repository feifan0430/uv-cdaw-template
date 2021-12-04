@extends('layouts.cdaw_film')
@section('content')
    <div class="container">
        <div class="row" style="margin-botton:3%;">
            <h2>
                Bonjour, Admin
            </h2>
        </div>
        <?php
        $num_user = DB::table('users')->count('id');
        $read_user = DB::select('select * from users');
        ?>
        <div class="row">
            <table class="table table-striped">
                <caption>
                    <h3>
                        Website User List
                    </h3>
                </caption>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>authority</th>
                    <th>operation</th>
                </tr>
                @for($i = 0; $i < $num_user; $i++)
                <tr>
                    <td>
                        {{$read_user[$i]->id}}
                    </td>
                    <td>
                        {{$read_user[$i]->name}}
                    </td>
                    <td>
                        {{$read_user[$i]->email}}
                    </td>
                    <td>
                        @if($read_user[$i]->authority == null)
                        general user
                        @else
                        {{$read_user[$i]->authority}}
                        @endif
                    </td>
                    <td>
                        @if($read_user[$i]->authority != 'admin')
                            @if($read_user[$i]->authority != 'ban')
                            <button class="btn rounded" onclick="ban_user('{{$read_user[$i]->id}}')" style="text-align:center; width:100%;">
                                Ban
                            </button>
                            @else
                            <button class="btn rounded" onclick="unblock_user('{{$read_user[$i]->id}}')" style="text-align:center; width:100%;">
                                Unblock
                            </button>
                            @endif
                        @endif
                    </td>
                </tr>
                @endfor
            </table>
            <hr class="featurette-divider">
            <table class="table table-striped">
                <?php
                $num_comment = DB::table('comments')->count('id');
                $read_comment = DB::select('select * from comments');
                ?>
                <caption>
                    <h3>
                        Website User Media Reviews
                    </h3>
                </caption>
                <tr>
                    <th>id_user</th>
                    <th>name_user</th>
                    <th>id_media</th>
                    <th>content</th>
                    <th>operation</th>
                </tr>
                @for($i = 0; $i < $num_comment; $i++)
                <tr>
                    <td>
                        {{$read_comment[$i]->id_user}}
                    </td>
                    <td>
                        {{$read_comment[$i]->author}}
                    </td>
                    <td>
                        {{$read_comment[$i]->id_media}}
                    </td>
                    <td>
                        {{$read_comment[$i]->content}}
                    </td>
                    <td>
                        @if($read_comment[$i]->visibility == 'true')
                        <button class="btn rounded" onclick="hide_comment('{{$read_comment[$i]->id}}')" style="text-align:center; width:100%;">
                            hide
                        </button>
                        @else
                        <button class="btn rounded" onclick="redisplay_comment('{{$read_comment[$i]->id}}')" style="text-align:center; width:100%;">
                            redisplay
                        </button>
                        @endif
                    </td>
                </tr>
                @endfor
            </table>
        </div>
    </div>
    <hr class="featurette-divider">

    <script>
        function ban_user(id) {
            console.log(id);
            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "admin_dashboard/ban_user",
                data: {user_id:id},
                //dataType: "json",
                success: function(msg){
                    console.log(msg);
                    console.log('Success banned.');
                    location.reload();
                },
                error:function(resultat, statut, erreur){
                    console.log(erreur);
                    // e.preventDefault();
                }
            });
        }

        function unblock_user(id) {
            console.log(id);
            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "admin_dashboard/unblock_user",
                data: {user_id:id},
                //dataType: "json",
                success: function(msg){
                    console.log(msg);
                    console.log('Success unblocked.');
                    location.reload();
                },
                error:function(resultat, statut, erreur){
                    console.log(erreur);
                    // e.preventDefault();
                }
            });
        }

        function hide_comment(comment_id) {
            console.log(comment_id);
            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "admin_dashboard/hide_comment",
                data: {comment_id:comment_id},
                //dataType: "json",
                success: function(msg){
                    console.log(msg);
                    console.log('Success hided.');
                    location.reload();
                },
                error:function(resultat, statut, erreur){
                    console.log(erreur);
                    // e.preventDefault();
                }
            });
        }

        function redisplay_comment(comment_id) {
            console.log(comment_id);
            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "admin_dashboard/redisplay_comment",
                data: {comment_id:comment_id},
                //dataType: "json",
                success: function(msg){
                    console.log(msg);
                    console.log('Success redisplayed.');
                    location.reload();
                },
                error:function(resultat, statut, erreur){
                    console.log(erreur);
                    // e.preventDefault();
                }
            });
        }
    </script>
@endsection