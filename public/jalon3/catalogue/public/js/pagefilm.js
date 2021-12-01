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

// Modify Comment
function modify(e) {
    var formnoeud = document.getElementById("myForm");
    formnoeud.style.visibility = "visible";
    var formsubmitnoeud = document.getElementById("myFormSubmit");
    formsubmitnoeud.disabled = false;
    usernoeud = document.getElementById(e.currentTarget.parentNode.id);
}





        function getdata() {
            return {
                t1:document.getElementById("0").innerHTML
                // t1: "@Hello@"
            };
        }

        function modify() {
            console.log("Bonjour@");
            alert("Bonjour@");
            // $.ajax({
            //     headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            //     type: 'POST',
            //     url: "localhost:8082/jalon3/catalogue/public/index.php/updateform",
            //     data: getdata(),
            //     success: function () {
            //     }
            // });
            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                //url: "localhost:8082/jalon3/catalogue/public/index.php/film/updateform",
                url: "updateform",
                data: getdata(),//.serialize(),
                //dataType: "json",
                success: function(msg){
                    console.log(msg);
                    console.log('YES');
                },
                error:function(resultat, statut, erreur){
                    console.log(erreur);
                  // e.preventDefault();
                  // alert('Un problème est survenu lors de la récupération des informations');
                }
            });
        }
