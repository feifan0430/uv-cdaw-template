<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageSearchController extends Controller
{
    
    public function searchcontent(Request $request) {
        // echo $request->search_content;
        // DB::update('update table_media set isshowed = ? where director not like ?', ['false', "%" . "Coppola" . "%"]);
        for ($i = 1; $i <= 250; $i++) { 
            DB::update('update table_media set isshowed = ? where id = ?', ['false', $i]);
        }
        DB::table('table_media')
            ->where('title', 'like', '%' . $request->search_content . '%')
            ->orwhere('director', 'like', '%' . $request->search_content . '%')
            ->orwhere('writer', 'like', '%' . $request->search_content . '%')
            ->orwhere('stars', 'like', '%' . $request->search_content . '%')
            ->orwhere('imdb_id', '=', '%' . $request->search_content . '%')
            ->orwhere('year', 'like', '%' . $request->search_content . '%')
            ->orwhere('country', 'like', '%' . $request->search_content . '%')
            ->update(['isshowed' => 'true']);
        return redirect('search');
    }

    public function searchdefault() {
        for ($i = 1; $i <= 250; $i++) { 
            DB::update('update table_media set isshowed = ? where id = ?', ['false', $i]);
        }
        return redirect('search');
    }
}
