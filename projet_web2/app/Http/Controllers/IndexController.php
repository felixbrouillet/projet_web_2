<?php

namespace App\Http\Controllers;
use App\Models\Actualite;

class IndexController extends Controller
{
    /**
     * Affiche la page d'accueil
     *
     * @return View
     */
    public function index() {
        // Récupère toutes les actualités
        $actualites = Actualite::all();

        return view('index', ['actualites' => $actualites]);
    }
}