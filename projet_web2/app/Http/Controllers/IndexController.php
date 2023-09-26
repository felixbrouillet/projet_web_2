<?php

namespace App\Http\Controllers;
use App\Models\Actualite;

class IndexController extends Controller

{

    /**
     * Affiche la page d'accueil avec les deux actualités les plus récentes.
     *
     * @return View
    */
    public function index() {

        // Récupérez les deux actualités les plus récentes en triant par ID de manière décroissante
        $actualites = Actualite::orderBy('id', 'desc')->take(2)->get();

        // Passer les actualités à la vue 'index'
        return view('index', compact('actualites'));

    }

}