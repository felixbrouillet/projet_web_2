<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forfait;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Affiche la réservation de l'utilisateur connecté.
     *
     * @return \Illuminate\View\View
     */
    public function showReservation()
    {
        // Récupère le forfait de l'utilisateur connecté
        $user = Auth::user();
        $forfait_id = $user->forfait_id;
        $forfait = null;

        // Si l'utilisateur a un forfait, récupère les détails du forfait
        if ($forfait_id !== null) {
            $forfait = Forfait::find($forfait_id);
        }

        // Envoyer toujours la variable $forfait à la vue
        return view('user.reservation', ['forfait' => $forfait]);
    }

    /**
     * Affiche le formulaire de création d'un nouvel utilisateur.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Stocke un nouvel utilisateur dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'role_id' => 'required'
        ]);

        // Créer un nouvel utilisateur
        $user = new User([
            'prenom' => $validatedData['prenom'],
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role_id' => $validatedData['role_id']
        ]);

        // Enregistrer l'utilisateur dans la base de données
        $user->save();

        // Redirection vers une page de succès ou une autre action
        return redirect()->route('index')->with('succes', 'Votre compte a été créé avec succès');
    }
}
