@props(['actualite', 'route', 'isEdit'])

<div class="container">
    <h2>{{ $isEdit ? 'Éditer' : 'Ajouter' }} une actualité</h2>
    <form class="formulaire form-actualites" action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Champ Nom de l'actualité -->
        <div>
            <input type="text" id="nom" name="nom" @if ($isEdit) value="{{ old('nom', $actualite->nom) }}" @endif required placeholder="Nom de l'actualité">
        </div>

        <!-- Champ Contenu de l'actualité -->
        <div>
            <textarea id="contenu" name="contenu" rows="10" required placeholder="Contenu de l'actualité">@if ($isEdit){{ old('contenu', $actualite->contenu) }}@endif</textarea>
        </div>

        <!-- Champ Image de l'actualité -->
        <div>
            <input type="file" id="image" name="image"@if ($isEdit){{ old('image', $actualite->image) }}@endif>    
        </div>

        <!-- Bouton de soumission -->
        <button type="submit">{{ $isEdit ? 'Enregistrer les modifications' : 'Ajouter une actualité' }}</button>
    </form>
</div>

