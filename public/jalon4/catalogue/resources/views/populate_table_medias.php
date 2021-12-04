<?php

$result = file_get_contents("https://imdb-api.com/en/API/Top250Movies/k_l43l8lra");

if (!$result) {
    die;
}else {
    echo "Success connected..." . "<br>";
}

$result = json_decode($result, true);
$result = $result['items'];

class media {
    var $id;
    var $created_at;
    var $updated_at;
    var $imdb_id;
    var $title;
    var $imdb_rank;
    var $year;
    var $image;
    var $imdb_rating;
    var $type;
    var $duration;
    var $director;
    var $writer;
    var $stars;
    var $country;
    var $isliked;
    var $iswatched;
    var $creator;
    var $introduction;
    var $firstwatchtime;
}

$temp = new media;
$num = 1;

foreach ($result as $key => $value) {
    foreach ($value as $key => $value) {
        if ($key == "id") {
            $temp->imdb_id = $value;
        }
        if ($key == "title") {
            $temp->title = $value;
        }
        if ($key == "rank") {
            $temp->imdb_rank = $value;
        }
        if ($key == "year") {
            $temp->year = $value;
        }
        if ($key == "image") {
            $temp->image = $value;
        }
    }
    DB::insert('insert into medias (imdb_id, imdb_rank, title, year, image, imdb_rating) values (?, ?, ?, ?, ?, ?)', [$temp->imdb_id, $temp->imdb_rank, $temp->title, $temp->year, $temp->image, $temp->imdb_rating]);
}

for ($i = 1; $i <= 100; $i++) { 
    $request_read = DB::select('select * from medias where id = ?', [$i]);
    $request_read = $request_read['0'];
    $result = file_get_contents("https://imdb-api.com/en/API/Title/k_l43l8lra/" . $request_read->imdb_id);
    $result = json_decode($result, true);
    DB::update('update medias set imdb_rating = ? where id = ?', [$result['imDbRating'], $i]);
    DB::update('update medias set duration = ? where id = ?', [$result['runtimeStr'], $i]);
    DB::update('update medias set type = ? where id = ?', [$result['type'], $i]);
    DB::update('update medias set director = ? where id = ?', [$result['directors'], $i]);
    DB::update('update medias set writer = ? where id = ?', [$result['writers'], $i]);
    DB::update('update medias set stars = ? where id = ?', [$result['stars'], $i]);
    DB::update('update medias set country = ? where id = ?', [$result['countries'], $i]);
    DB::update('update medias set introduction = ? where id = ?', [$result['plot'], $i]);
    DB::update('update medias set is_showed= ? where id = ?', ['true', $i]);
}
echo "Bonjour.";
// table
?>