<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageExploreController extends Controller
{
    public function effacer() {
        for ($i = 1; $i <= 250; $i++) { 
            DB::update('update table_media set isshowed = ? where id = ?', ['true', $i]);
        }
        return redirect('explore');
    }

    public function afficher() {
        for ($i = 1; $i <= 250; $i++) { 
            DB::update('update table_media set isshowed = ? where id = ?', ['true', $i]);
        }
        return redirect('explore');
    }

    // country

    public function france() {
        // for ($i = 1; $i <= 250; $i++) { 
        //     DB::update('update table_media set isshowed = ? where id = ?', ['false', $i]);
        // }
        // $read_table_media = 
        // DB::select('select * from table_media where country like ?', ["%" . "France" . "%"]);
        
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "France" . "%"]);

        // $num = 0;
        // foreach ($read_table_media as $k => $v) {
        //     $num++;
        // }

        // dd($read_table_media);
        return redirect('explore');
    }

    public function usa() {
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "USA" . "%"]);
        return redirect('explore');
    }

    public function uk() {
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "UK" . "%"]);
        return redirect('explore');
    }

    public function germany() {
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "Germany" . "%"]);
        return redirect('explore');
    }

    public function italy() {
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "Italy" . "%"]);
        return redirect('explore');
    }

    public function japan() {
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "Japan" . "%"]);
        return redirect('explore');
    }

    public function spain() {
        DB::update('update table_media set isshowed = ? where country not like ?', ['false', "%" . "Spain" . "%"]);
        return redirect('explore');
    }

    // year

    public function after2010() {
        DB::table('table_media')
            ->where('year', '<', '2010')
            ->update(['isshowed' => 'false']);
        return redirect('explore');
    }

    public function between2000and2009() {
        DB::table('table_media')
            ->where('year', '>', '2009')
            ->orwhere('year', '<', '2000')
            ->update(['isshowed' => 'false']);
        return redirect('explore');
    }

    public function between1980and1999() {
        DB::table('table_media')
            ->where('year', '>', '1999')
            ->orwhere('year', '<', '1980')
            ->update(['isshowed' => 'false']);
        return redirect('explore');
    }

    public function before1980() {
        DB::table('table_media')
            ->where('year', '>', '1979')
            ->update(['isshowed' => 'false']);
        return redirect('explore');
    }
}
