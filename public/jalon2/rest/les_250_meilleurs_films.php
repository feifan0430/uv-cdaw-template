<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Fan FEI">
    <meta name="description" content="IMDB api">
    <title>CDAW api demo</title>
</head>
<body>
    
<?php
// Les 250 meilleurs films
$result = file_get_contents("https://imdb-api.com/fr/API/Top250Movies/k_l43l8lra");

if (!$result) {
    die;
}else {
    echo "Success connected..." . "<br>";
}
$result = json_decode($result, true);
$result = $result['items'];

// echo json_encode($result);

class film {
    var $id;
    var $title;
    var $year;

    function getId(){
        echo $this->id . PHP_EOL;
    }
    function getTitle(){
        echo $this->title . PHP_EOL;
    }
    function getYear(){
        echo $this->year . PHP_EOL;
    }
}

$temp = new film;
$num = 1;

foreach ($result as $key => $value) {
    foreach ($value as $key => $value) {
        if ($key == "title") {
            $temp->title = $value;
            echo $num++ . ": " . $temp->title . "<br>";
        }
    }
}
?>

</body>
</html>