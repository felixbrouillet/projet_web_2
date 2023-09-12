<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Affiche la connexion
     *
     * @return View
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('index')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
