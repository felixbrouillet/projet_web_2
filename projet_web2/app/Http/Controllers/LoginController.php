<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Affiche la connexion
     *
     * @return View
     */
    public function show() {
        return view('auth.login.register');
    }

    /**
     * Traite la connexion et connecte l'utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifier(Request $request) {
        // Valider
        $valides = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ], [
            "email.required" => "Le courriel est obligatoire",
            "email.email" => "Le courriel doit avoir un format valide",
            "password.required" => "Le mot de passe est requis"
        ]);
    
        // On "essaie" de connecter l'utilisateur
        if (Auth::attempt($valides)) {
            $request->session()->regenerate();
    
            // Obtenir le rôle de l'utilisateur connecté
            $role = Auth::user()->role->nom;
    
            if ($role === 'client') {
                // Redirection pour les clients (page d'accueil)
                return redirect()->intended(route('index'));
            } else {
                // Redirection pour les administrateurs et les employés (tableau de bord commun)
                return redirect()->intended(route('dashboard.index'));
            }
        }
    
        // L'utilisateur n'a pu être connecté: on le ramène au formulaire avec une erreur
        return back()
                ->withErrors([
                    "email" => "Les informations fournies ne sont pas valides"
                ])
                ->onlyInput('email');
    }
}
