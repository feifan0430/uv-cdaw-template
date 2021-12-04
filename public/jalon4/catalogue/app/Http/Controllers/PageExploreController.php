<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PageExploreController extends Controller
{
    public function effacer() {
        for ($i = 1; $i <= 250; $i++) { 
            DB::update('update medias set is_showed = ? where id = ?', ['true', $i]);
        }
        return redirect('explore');
    }

    public function afficher() {
        for ($i = 1; $i <= 250; $i++) { 
            DB::update('update medias set is_showed = ? where id = ?', ['true', $i]);
        }
        return redirect('explore');
    }

    // country
    public function france() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "France" . "%"]);
        return redirect('explore');
    }

    public function usa() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "USA" . "%"]);
        return redirect('explore');
    }

    public function uk() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "UK" . "%"]);
        return redirect('explore');
    }

    public function germany() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "Germany" . "%"]);
        return redirect('explore');
    }

    public function italy() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "Italy" . "%"]);
        return redirect('explore');
    }

    public function japan() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "Japan" . "%"]);
        return redirect('explore');
    }

    public function spain() {
        DB::update('update medias set is_showed = ? where country not like ?', ['false', "%" . "Spain" . "%"]);
        return redirect('explore');
    }

    // year
    public function after2010() {
        DB::table('medias')
            ->where('year', '<', '2010')
            ->update(['is_showed' => 'false']);
        return redirect('explore');
    }

    public function between2000and2009() {
        DB::table('medias')
            ->where('year', '>', '2009')
            ->orwhere('year', '<', '2000')
            ->update(['is_showed' => 'false']);
        return redirect('explore');
    }

    public function between1980and1999() {
        DB::table('medias')
            ->where('year', '>', '1999')
            ->orwhere('year', '<', '1980')
            ->update(['is_showed' => 'false']);
        return redirect('explore');
    }

    public function before1980() {
        DB::table('medias')
            ->where('year', '>', '1979')
            ->update(['is_showed' => 'false']);
        return redirect('explore');
    }

    // director
    public function christopher_nolan() {
        DB::update('update medias set is_showed = ? where director not like ?', ['false', "%" . "Christopher Nolan" . "%"]);
        return redirect('explore');
    }

    public function coppola() {
        DB::update('update medias set is_showed = ? where director not like ?', ['false', "%" . "Coppola" . "%"]);
        return redirect('explore');
    }

    public function steven_spielberg() {
        DB::update('update medias set is_showed = ? where director not like ?', ['false', "%" . "Steven Spielberg" . "%"]);
        return redirect('explore');
    }

    public function hayao_miyazaki() {
        DB::update('update medias set is_showed = ? where director not like ?', ['false', "%" . "Hayao Miyazaki" . "%"]);
        return redirect('explore');
    }
}
