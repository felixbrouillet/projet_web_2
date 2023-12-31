<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use Illuminate\Support\Facades\Storage; // Ajout pour utiliser la classe Storage

class ActualiteController extends Controller
{
    /**
     * Affiche toutes les actualités.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // Récupère toutes les actualités
        $actualites = Actualite::all();

        return view('actualites.index', ['actualites' => $actualites]);
    }

    /**
     * Enregistre une nouvelle actualité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);

        // Créer une nouvelle actualité
        $actualite = new Actualite([
            'nom' => $validatedData['nom'],
            'contenu' => $validatedData['contenu'],
        ]);

        // Gestion de l'image s'il y en a une
        if ($request->hasFile('image')) {
            // Récupérer le nom du fichier (sans le chemin)
            $imageName = $request->file('image')->getClientOriginalName();

            // Stocker l'image dans le dossier public/img/images
            $request->file('image')->move(public_path('img/images'), $imageName);

            // Assigner le nom de l'image à l'actualité
            $actualite->image = $imageName;
        } else {
            echo 'Aucun fichier image envoyé.';
        }

        // Enregistrez l'actualité dans la base de données
        $actualite->save();

        // Redirection vers la page des actualités avec un message de succès
        return redirect()->route('dashboard.actualites')->with('succes', 'Actualité ajoutée avec succès');
    }
        
    /**
     * Affiche le formulaire pour modifier une actualité.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $actualite = Actualite::find($id);

        if ($actualite) {
            return view('dashboard.edit.edit-actualites', ['actualite' => $actualite, 'isEdit' => true]);
        }

        return redirect()->route('dashboard.actualites')->with('erreur', 'Actualité introuvable');
    }

    /**
     * Met à jour une actualité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $actualite = Actualite::find($id);
        
        if ($actualite) {
            // Valider les données du formulaire (vous pouvez les personnaliser)
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'contenu' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
            ]);

            // Mettre à jour les champs de l'actualité
            $actualite->nom = $validatedData['nom'];
            $actualite->contenu = $validatedData['contenu'];

            // Gestion de la nouvelle image si elle est présente
            if ($request->hasFile('image')) {
                // Supprime l'ancienne image si elle existe
                if ($actualite->image) {
                    Storage::delete($actualite->image);
                }

                // Enregistrez la nouvelle image
                $imageName = $request->file('image')->getClientOriginalName();
                $actualite->image = $imageName;
            }

            // Enregistrer les modifications
            $actualite->save();

            return redirect()->route('dashboard.actualites')->with('success', 'Actualité mise à jour avec succès');
        }

        return redirect()->route('dashboard.actualites')->with('error', 'Actualité non trouvée');
    }

    /**
     * Supprime une actualité.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $actualite = Actualite::find($id);

        if ($actualite) {
            $actualite->delete();
            return redirect()->route('dashboard.actualites')->with('succes', 'Actualité supprimée avec succès');
        }

        return redirect()->route('dashboard.actualites')->with('erreur', 'Actualité introuvable');
    }
}
