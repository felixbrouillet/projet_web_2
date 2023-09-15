<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;

class ActualiteController extends Controller
{
    public function show() {
        // Récupère toutes les actualites 
        $actualites = Actualite::all();
        
        return view('actualites.index', ['actualites' => $actualites]);
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);
    
        // Créer une nouvelle activité
        $actualite = new Actualite([
            'nom' => $validatedData['nom'],
            'contenu' => $validatedData['contenu'],
        ]);
    
        // Gestion de l'image s'il y en a une
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualite_images'); // Enregistrez l'image dans le dossier "actualite_images"
            $actualite->image = $imagePath;
        }
    
        // Enregistrez l'activité dans la base de données
        $actualite->save();
    
        // Redirection vers la page des activités avec un message de succès
        return redirect()->route('dashboard.actualites')->with('success', 'Actualité ajoutée avec succès');
    }

    public function edit($id)
    {
        $actualites = Actualite::find($id);

        $isEdit = true;
        return view('dashboard.edit.edit-actualites', ['actualites' => $actualites]);
    }

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

            // Mettre à jour les champs de l'activité
            $actualite->nom = $validatedData['nom'];
            $actualite->contenu = $validatedData['contenu'];

            // Gestion de la nouvelle image si elle est présente
            if ($request->hasFile('image')) {
                // Supprime l'ancienne image si elle existe
                if ($actualite->image) {
                    Storage::delete($actualite->image);
                }

                // Enregistrez la nouvelle image
                $imagePath = $request->file('image')->store('actualite_images');
                $actualite->image = $imagePath;
            }

            // Enregistrer les modifications
            $actualite->save();

            return redirect()->route('dashboard.actualites')->with('success', 'Actualité mise à jour avec succès');
        }

        return redirect()->route('dashboard.actualites')->with('error', 'Actualité non trouvée');
    }    

    public function delete($id)
    {
        $actualite = Actualite::find($id);

        if ($actualite) {
            $actualite->delete();
            return redirect()->route('dashboard.actualites')->with('success', 'Actualité supprimée avec succès');
        }

        return redirect()->route('dashboard.actualites')->with('error', 'Actualité non trouvée');
    } 

}
