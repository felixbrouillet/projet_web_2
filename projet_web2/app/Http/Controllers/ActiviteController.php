<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActiviteController extends Controller
{
    public function show() {
        // Récupère toutes les activites 
        $activites = Activite::all();
        
        return view('activites.index', ['activites' => $activites]);
    }

}
