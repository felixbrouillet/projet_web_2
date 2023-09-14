<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Affiche le dashboard pour les admins
     *
     * @return View
     */
    public function index()
    {
        // Récupère la liste des administrateurs depuis la base de données
        $admins = User::where('role_id', 1)->get(); 
        
        // Récupère l'utilisateur connecté
        $user = auth()->user();

        return view('dashboard.index', ['admins' => $admins, 'user' => $user]);
    }


}
