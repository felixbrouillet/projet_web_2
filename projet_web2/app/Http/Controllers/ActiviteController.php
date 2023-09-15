<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;
use Illuminate\Support\Facades\Storage;

class ActiviteController extends Controller
{
    public function show() {
        // Récupère toutes les activites 
        $activites = Activite::all();
        
        return view('activites.index', ['activites' => $activites]);
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);
    
        // Créer une nouvelle activité
        $activite = new Activite([
            'nom' => $validatedData['nom'],
            'description' => $validatedData['description'],
        ]);
    
        // Gestion de l'image s'il y en a une
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('activite_images'); // Enregistrez l'image dans le dossier "activite_images"
            $activite->image = $imagePath;
        }
    
        // Enregistrez l'activité dans la base de données
        $activite->save();
    
        // Redirection vers la page des activités avec un message de succès
        return redirect()->route('dashboard.activites')->with('success', 'Activité ajoutée avec succès');
    }

    public function edit($id)
    {
        $activites = Activite::find($id);

        $isEdit = true;
        return view('dashboard.edit.edit-activites', ['activites' => $activites]);
    }

    public function update(Request $request, $id)
    {
        $activite = Activite::find($id);
        
        if ($activite) {
            // Valider les données du formulaire (vous pouvez les personnaliser)
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
            ]);

            // Mettre à jour les champs de l'activité
            $activite->nom = $validatedData['nom'];
            $activite->description = $validatedData['description'];

            // Gestion de la nouvelle image si elle est présente
            if ($request->hasFile('image')) {
                // Supprime l'ancienne image si elle existe
                if ($activite->image) {
                    Storage::delete($activite->image);
                }

                // Enregistrez la nouvelle image
                $imagePath = $request->file('image')->store('activite_images');
                $activite->image = $imagePath;
            }

            // Enregistrer les modifications
            $activite->save();

            return redirect()->route('dashboard.activites')->with('success', 'Activité mise à jour avec succès');
        }

        return redirect()->route('dashboard.activites')->with('error', 'Activité non trouvée');
    }    

    public function delete($id)
    {
        $activite = Activite::find($id);

        if ($activite) {
            $activite->delete();
            return redirect()->route('dashboard.activites')->with('success', 'Utilisateur supprimé avec succès');
        }

        return redirect()->route('dashboard.activites')->with('error', 'Utilisateur non trouvé');
    }

}


