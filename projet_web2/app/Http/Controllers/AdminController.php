<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
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
        $admin = new User([
            'prenom' => $validatedData['prenom'],
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Assurez-vous de hacher le mot de passe
            'role_id' => $validatedData['role_id'],
        ]);
    
        // Enregistrer l'employé dans la base de données
        $admin->save();
    
        // Redirection vers le dashboard avec le message de succès 
        return redirect()->route('dashboard.index')->with('success', 'Admin ajouté avec succès');
    }

    public function edit($id)
    {
        $user = User::find($id);

        $isEdit = true;
        return view('dashboard.edit-admin', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        if ($user) {
            // Valider les données du formulaire (vous pouvez les personnaliser)
            $validatedData = $request->validate([
                'prenom' => 'required|string|max:255',
                'nom' => 'required|string|max:255',
                'email' => 'required|email',
                'password' => 'required|string', 
                'role_id' => 'required|numeric',
            ]);
    
            // Mettre à jour les autres champs de l'utilisateur
            $user->prenom = $validatedData['prenom'];
            $user->nom = $validatedData['nom'];
            $user->email = $validatedData['email'];
            $user->role_id = $validatedData['role_id'];
    
            // Vérifier si un nouveau mot de passe a été fourni
            if ($request->filled('password')) {
                // Hacher le nouveau mot de passe
                $user->password = bcrypt($validatedData['password']);
            }
            
            // Enregistrer les modifications
            $user->save();
    
            return redirect()->route('dashboard.index')->with('success', 'Utilisateur mis à jour avec succès');
        }
    
        return redirect()->route('dashboard.index')->with('error', 'Utilisateur non trouvé');
    }
    
    public function delete($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('dashboard.index')->with('success', 'Utilisateur supprimé avec succès');
        }

        return redirect()->route('dashboard.index')->with('error', 'Utilisateur non trouvé');
    }

}
