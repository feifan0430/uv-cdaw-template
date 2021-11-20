<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listeCRUDController extends Controller
{
    public function liste_create () {
        DB::insert('insert into liste_film (name, director) values (?, ?)', ['Inception', 'Christopher Nolan']);
        // DB::insert('insert into liste_film (name, director) values (?, ?)', ['Inception2', 'Christopher Nolan']);
        return "update success.";
    }

    public function liste_delete (Request $request, $id) {
        DB::delete('delete from liste_film where id = ?', [$id]);
        return "delete success.";
    }

    public function liste_read (Request $request, $id) {
        $request_read = DB::select('select * from liste_film where id = ?', [$id]);
        // dd($request_read);
        echo "ID: " . $id . "<br/>";
        $request_read = $request_read['0'];
        echo "Name: " . $request_read->name . " Director: " . $request_read->director . "<br/>";
        return "read success.";
    }

    public function liste_update (Request $request, $id) {
        DB::update('update liste_film set name="LaravelAcademy" where id = ?', [$id]);
        return "update success.";
    }
}