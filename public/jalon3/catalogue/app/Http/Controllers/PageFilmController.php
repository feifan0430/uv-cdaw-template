<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageFilmController extends Controller
{
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
}
