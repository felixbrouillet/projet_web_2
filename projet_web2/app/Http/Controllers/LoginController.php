<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Affiche la page de connexion
     *
     * @return View
     */
    public function show() {
        return view('auth.login.register');
    }

    /**
     * Traite la demande de connexion et authentifie l'utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifier(Request $request) {
        // Valider les données du formulaire
        $valides = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ], [
            "email.required" => "Le courriel est obligatoire",
            "email.email" => "Le courriel doit avoir un format valide",
            "password.required" => "Le mot de passe est requis"
        ]);
    
        // Tenter de connecter l'utilisateur
        if (Auth::attempt($valides)) {
            $request->session()->regenerate();
        
            // Obtenir le rôle de l'utilisateur connecté
            $role = Auth::user()->role->nom;
                
            if ($role === 'client') {
                // Redirection vers la page d'accueil pour les clients
                return redirect()->intended(route('index'));
            } else {
                // Redirection vers le dashboard pour les administrateurs
                return redirect()->intended(route('dashboard.index'));
            }
        }
            
        // L'utilisateur n'a pu être connecté: redirection vers le formulaire avec un message d'erreur
        return back()
                ->withErrors([
                    "email" => "Les informations fournies ne sont pas valides"
                ])
                ->onlyInput('email');
    }
}
