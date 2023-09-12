<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Affiche le dashboard pour les employés et les admins
     *
     * @return View
     */
    public function index() {
        return view('dashboard.index');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string',
            'role_id' => 'required|numeric',
        ]);
    
        // Créer un nouvel employé
        $employe = new User([
            'prenom' => $validatedData['prenom'],
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Assurez-vous de hacher le mot de passe
            'role_id' => $validatedData['role_id'],
        ]);
    
        // Enregistrer l'employé dans la base de données
        $employe->save();
    
        // Redirection vers le dashboard avec le message de succès 
        return redirect()->route('dashboard.index')->with('success', 'Employé ajouté avec succès');
    }
}
