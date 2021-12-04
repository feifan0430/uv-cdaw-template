<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PageSearchController extends Controller
{
    public function searchcontent(Request $request) {
        for ($i = 1; $i <= 100; $i++) { 
            DB::update('update medias set is_showed = ? where id = ?', ['false', $i]);
        }
        DB::table('medias')
            ->where('title', 'like', '%' . $request->search_content . '%')
            ->orwhere('director', 'like', '%' . $request->search_content . '%')
            ->orwhere('writer', 'like', '%' . $request->search_content . '%')
            ->orwhere('stars', 'like', '%' . $request->search_content . '%')
            ->orwhere('imdb_id', '=', '%' . $request->search_content . '%')
            ->orwhere('year', 'like', '%' . $request->search_content . '%')
            ->orwhere('country', 'like', '%' . $request->search_content . '%')
            ->update(['is_showed' => 'true']);
        return redirect('search');
    }

    public function searchdefault() {
        for ($i = 1; $i <= 100; $i++) { 
            DB::update('update medias set is_showed = ? where id = ?', ['false', $i]);
        }
        return redirect('search');
    }
}
