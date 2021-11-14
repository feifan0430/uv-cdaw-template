<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Fan FEI">
    <meta name="description" content="IMDB title api demo">
    <title>CDAW api demo</title>
</head>
<body>
    
<?php
$result = file_get_contents("https://imdb-api.com/en/API/Title/k_l43l8lra/tt1375666");
if (!$result) {
    die;
}else {
    echo "Success connected..." . "<br>";
}
$result = json_decode($result, true);
echo $result['title'];
?>

</body>
</html>