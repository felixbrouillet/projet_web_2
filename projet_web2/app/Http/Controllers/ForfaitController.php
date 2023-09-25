<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ForfaitController extends Controller
{
    /**
     * Affiche tous les forfaits disponibles
     *
     * @return View
     */
    public function show() {
        // Récupère tous les forfaits
        $forfaits = Forfait::all();

        return view('forfaits.index', ['forfaits' => $forfaits]);
    }

    /**
     * Affiche la page de réservation pour un forfait spécifique
     *
     * @param int $id
     * @return View
     */
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

    /**
     * Met à jour les informations sur le forfait de l'utilisateur
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Récupérez l'ID du forfait à partir de la requête
        $forfait_id = $request->input('forfait_id');

        // Récupère l'utilisateur connecté
        $user = Auth::user();

        // Si l'utilisateur n'est pas reconnu, redirige vers la page de forfaits avec une erreur
        if (!$user) {
            return redirect()->route('forfaits.show')->with('erreur', 'Utilisateur non trouvé.');
        }

        // Récupérez la valeur du bouton soumis (confirmer ou annuler)
        $action = $request->input('action');

        // Met à jour le champ 'forfait_id' de l'utilisateur connecté si l'utilisateur a cliqué sur le bouton oui et redirige vers l'accueil avec un message de succès
        if ($action === 'confirmer') {
            $user->forfait_id = $forfait_id;

            // Mettez à jour le timestamp
            $user->date_achat_forfait = now();

            $user->save();
            return redirect()->route('index')->with('succes', "Forfait de l'utilisateur mis à jour avec succès.");
        } elseif ($action === 'annuler') {
            return redirect()->route('forfaits.show')->with('succes', 'Réservation annulée.');
        } else {
            return redirect()->route('forfaits.show')->with('erreur', 'Action non reconnue.');
        }
    }

    /**
     * Annule la réservation du forfait de l'utilisateur
     *
     * @return RedirectResponse
     */
    public function delete() {
        // Récupère l'utilisateur connecté
        $user = Auth::user();

        // Mettre à jour forfait_id à null
        $user->date_achat_forfait = null;
        $user->forfait_id = null;
        $user->save();

        // Redirige l'utilisateur vers la page d'accueil avec un message
        return redirect()->route('index')->with('succes', 'Votre forfait a bien été annulé');
    }
}
