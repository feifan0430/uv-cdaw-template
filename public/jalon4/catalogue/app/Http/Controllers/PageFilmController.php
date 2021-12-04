<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PageFilmController extends Controller
{
    public function openpage(Request $request) {
        $result_read = DB::select('select * from medias where imdb_id = ?', [$request->imdb_id]);
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
        $is_showed = $result_read['0']->is_showed;

        $num_commentary = DB::table('comments')->where('id_media', $request->imdb_id)->count('id');
        $commentary_read = DB::select('select * from comments where id_media = ?', [$request->imdb_id]);
        
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
                    ->with('commentary_read', $commentary_read)
                    ->with('is_showed', $is_showed);
    }

    public function createform(Request $request) {
        DB::insert('insert into comments (id_media, id_user, content, visibility) values (?, ?, ?, ?)', [$request->imdb_id, $request->id_user, $request->createcomment, 'true']);
        return redirect('film/' . $request->imdb_id);
    }

    public function updateform(Request $request) {
        DB::update('update comments set id_user = ? where id = ?', [$request->update_id_user, $request->update_comment_id]);
        DB::update('update comments set content = ? where id = ?', [$request->update_comment, $request->update_comment_id]);
        return redirect('film/' . $request->update_imdb_id);
    }

    public function deleteform(Request $request) {
        DB::delete('delete from comments where id = ?', [$request->comment_id]);
    }

    public function updatelike(Request $request) {
        $result_read = DB::select('select * from medias where imdb_id = ?', [$request->imdb_id]);
        if($result_read['0']->isliked == 'false') {
            DB::update('update medias set isliked = ? where imdb_id = ?', ['true', $request->imdb_id]);
        }else {
            DB::update('update medias set isliked = ? where imdb_id = ?', ['false', $request->imdb_id]);
        }
        return redirect('film/' . $request->imdb_id);
    }

    public function updatewatch(Request $request) {
        $result_read = DB::select('select * from medias where imdb_id = ?', [$request->imdb_id]);
        if($result_read['0']->iswatched == 'false') {
            DB::update('update medias set iswatched = ? where imdb_id = ?', ['true', $request->imdb_id]);
        }else {
            DB::update('update medias set iswatched = ? where imdb_id = ?', ['false', $request->imdb_id]);
        }
        return redirect('film/' . $request->imdb_id);
    }
}
