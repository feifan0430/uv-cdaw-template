<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    public function getListeMedias() {
        // return view('listeMedias');
        return "Bonjour";
    }

    public function afficherListeMedias($type, $annee) {
        // return view('listeMedias', ['type' => $type, 'annee' => $annee]);
        return "TYPE: " . $type . "  Year: " . $annee;
    }
  
}
