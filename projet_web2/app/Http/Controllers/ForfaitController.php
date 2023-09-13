<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ForfaitController extends Controller
{
    public function show() {
        // Récupère tous les forfaits 
        $forfaits = Forfait::all();
        
        return view('forfaits.index', ['forfaits' => $forfaits]);
    }

    public function reservation($id)
    {
        // Récupère le forfait en fonction de son id
        $forfait = Forfait::find($id);
    
        // Gère le cas où le forfait n'existe pas
        if (!$forfait) {
            abort(404);
        }
    
        // Envoie le forfait à la vue de validation
        return view('forfaits.validation', ['forfait' => $forfait]);
    }

    public function updateForfaits(Request $request, $id)
    {
        // Récupérez l'ID du forfait à partir de la requête
        $forfait_id = $request->input('forfait_id');
    
        // Récupère l'utilisateur connecté
        $user = Auth::user();
    
        // Si l'utilisateur n'est pas reconnu il redirige vers la page de forfaits avec une erreur
        if (!$user) {
            return redirect()->route('forfaits.show')->with('error', 'Utilisateur non trouvé.');
        }
    
        // Récupérez la valeur du bouton soumis (confirmer ou annuler)
        $action = $request->input('action');
    
        // Met à jour le champ 'forfait_id' de l'utilisateur connecté si l'utilisateur à cliqué sur le bouton oui et redirige à l'accueil avec un message de succes
        if ($action === 'confirmer') {
            $user->forfait_id = $forfait_id;
            $user->save();
            return redirect()->route('index')->with('success', 'Forfait de l\'utilisateur mis à jour avec succès.');

        // Si l'utilisateur clique sur non, il est redirigé vers la page des forfaits avec un message 
        } elseif ($action === 'annuler') {
            return redirect()->route('forfaits.show')->with('info', 'Réservation annulée.');
        } else {
            return redirect()->route('forfaits.show')->with('error', 'Action non reconnue.');
        }
    }

    public function delete() {
        // Récupère l'utilisateur connecté
        $user = Auth::user();
    
        // Mettre à jour forfait_id à null
        $user->forfait_id = null;
        $user->save();
    
        // Redirige l'utilisateur vers la page d'accueil avec un message
        return redirect()->route('index')->with('success', 'Votre forfait a bien été annulé');
    }
}
