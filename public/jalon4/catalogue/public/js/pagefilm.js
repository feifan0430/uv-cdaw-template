// delete comment

function getDataToDelete(comment_id, imdb_id) {
    return {
        comment_id:comment_id,
        imdb_id:imdb_id
    };
}

function delete_comment(comment_id, imdb_id) {
    console.log("delete the comment...");
    $.ajax({
        type: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: "deleteform",
        data: getDataToDelete(comment_id, imdb_id),
        //dataType: "json",
        success: function(msg){
            console.log(msg);
            console.log('Success deleted.');
            location.reload();
        },
        error:function(resultat, statut, erreur){
            console.log(erreur);
            // e.preventDefault();
        }
    });
}

// film like
function getDataToFilmLike(imdb_id) {
    return {
        imdb_id:imdb_id
    };
}

function film_like(imdb_id) {
    console.log(imdb_id);
    console.log("like film...");
    $.ajax({
        type: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: "film_like",
        data: getDataToFilmLike(imdb_id),
        //dataType: "json",
        success: function(msg){
            console.log(msg);
            console.log('Success liked.');
            location.reload();
        },
        error:function(resultat, statut, erreur){
            console.log(erreur);
            // e.preventDefault();
        }
    });
}