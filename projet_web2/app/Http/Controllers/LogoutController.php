<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Affiche la page de déconnexion et déconnecte l'utilisateur.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        // Déconnecte l'utilisateur actuellement authentifié
        Auth::logout();

        // Redirige vers la page d'accueil et affiche un message de succès
        return redirect()->route('index')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
