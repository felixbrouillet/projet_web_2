<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Forfait;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function edit($id)
    {
        // Récupérer l'utilisateur à éditer
        $client = User::findOrFail($id);

        // Récupérer la liste des forfaits
        $forfaits = Forfait::all();

        return view('dashboard.edit.edit-clients', ['client' => $client, 'forfaits' => $forfaits]);
    }

    public function delete($id)
    {
        $clients = User::find($id);

        if ($clients) {
            $clients->delete();
            return redirect()->route('dashboard.clients')->with('success', 'Utilisateur supprimé avec succès');
        }

        return redirect()->route('dashboard.clients')->with('error', 'Utilisateur non trouvé');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'forfait_id' => 'required|exists:forfaits,id'
        ]);

        // Mettre à jour les champs de l'utilisateur
        $user->prenom = $validatedData['prenom'];
        $user->nom = $validatedData['nom'];
        $user->email = $validatedData['email'];
        $user->forfait_id = $validatedData['forfait_id'];

        // Enregistrer les modifications
        $user->save();

        return redirect()->route('dashboard.clients')->with('success', 'Utilisateur mis à jour avec succès');
    }

}
