<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageFilmController extends Controller
{
    public function openpage (Request $request) {
        // echo $request->imdb_id;
        $result_read = DB::select('select * from table_media where imdb_id = ?', [$request->imdb_id]);
        $title = $result_read['0']->title;
        $year = $result_read['0']->year;
        $image = $result_read['0']->image;
        $director = $result_read['0']->director;
        $writer = $result_read['0']->writer;
        $stars = $result_read['0']->stars;
        $country = $result_read['0']->country;
        $type = $result_read['0']->type;
        $duration = $result_read['0']->duration;
        $imdb_rating = $result_read['0']->imdb_rating;
        $introduction = $result_read['0']->introduction;

        $num_commentary = DB::table('table_commentary')->where('media_id', $request->imdb_id)->count('id');
        $commentary_read = DB::select('select * from table_commentary where media_id = ?', [$request->imdb_id]);
        
        return view('film')
                    ->with('imdb_id', $request->imdb_id)
                    ->with('title', $title)
                    ->with('year', $year)
                    ->with('image', $image)
                    ->with('director', $director)
                    ->with('writer', $writer)
                    ->with('stars', $stars)
                    ->with('country', $country)
                    ->with('type', $type)
                    ->with('duration', $duration)
                    ->with('imdb_rating', $imdb_rating)
                    ->with('introduction', $introduction)
                    ->with('num_commentary', $num_commentary)
                    ->with('commentary_read', $commentary_read);
    }

    public function createform (Request $request) {
        // return view('index');
        // echo "Bonjour <br/>";
        // echo $request->imdb_id . "<br/>";
        // echo $request->createcomment . "<br/>";
        // echo $request->author . "<br/>";
        DB::insert('insert into table_commentary (media_id, author, content, visibility) values (?, ?, ?, ?)', [$request->imdb_id, $request->author, $request->createcomment, 'true']);
        // $url = "film/" . $request->imdb_id;
        // return view($url);
        return redirect('film/' . $request->imdb_id); //-> view('film', ['imdb_id' => $request->imdb_id]);
    }

    public function updateform (Request $request) {
        print_r($request->t1);
        print_r("Hello World");
        // return "Bonjour";
    }

    public function deleteform(Request $request) {
        // print_r($request->comment_id);
        // print_r($request->imdb_id);
        DB::delete('delete from table_commentary where id = ?', [$request->comment_id]);
        // return redirect('film/' . $request->imdb_id);
    }
}