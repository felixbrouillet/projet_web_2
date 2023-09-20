<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * Affiche la page d'accueil
     *
     * @return View
     */
    public function index() {
        return view('index');
    }
}
