<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;
use Illuminate\Support\Facades\Storage;

class ActiviteController extends Controller
{
    /**
     * Affiche toutes les activités.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // Récupère toutes les activités
        $activite = Activite::all();
        
        return view('activites.index', ['activite' => $activite]);
    }

    /**
     * Enregistre une nouvelle activité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Affiche le formulaire pour modifier une activité.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $activite = Activite::find($id);

        if ($activite) {
            return view('dashboard.edit.edit-activites', ['activite' => $activite, 'isEdit' => true]);
        }

        return redirect()->route('dashboard.activites')->with('error', 'Activité non trouvée');
    }

    /**
     * Met à jour une activité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
                $imagePath = $request->file('image')->store('img/images');
                $activite->image = $imagePath;
            }

            // Enregistrer les modifications
            $activite->save();

            return redirect()->route('dashboard.activites')->with('success', 'Activité mise à jour avec succès');
        }

        return redirect()->route('dashboard.activites')->with('error', 'Activité non trouvée');
    }

    /**
     * Supprime une activité.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $activite = Activite::find($id);

        if ($activite) {
            $activite->delete();
            return redirect()->route('dashboard.activites')->with('success', 'Activité supprimée avec succès');
        }

        return redirect()->route('dashboard.activites')->with('error', 'Activité non trouvée');
    }
}