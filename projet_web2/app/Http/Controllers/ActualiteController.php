<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;

class ActualiteController extends Controller
{
    public function show() {
        // Récupère toutes les actualites 
        $actualites = Actualite::all();
        
        return view('actualites.index', ['actualites' => $actualites]);
    }
}
