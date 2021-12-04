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