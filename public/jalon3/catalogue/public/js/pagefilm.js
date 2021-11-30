
        function getdata () {
            return {
                // t1:document.getElementById("fan0").innerHTML
                t1:1
            };
        }
        function modify () {
            console.log("Bonjour");
            alert("Bonjour.");
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
                // url: "localhost:8082/jalon3/catalogue/public/index.php/updateform",
                url: "index.php/updateform",
                data: getdata(),//.serialize(),
                dataType: "json",
                success: function(msg){
                    console.log(msg);
                },
                error:function(resultat, statut, erreur){
                  // e.preventDefault();
                  // alert('Un problème est survenu lors de la récupération des informations');
                }
            });
        }
