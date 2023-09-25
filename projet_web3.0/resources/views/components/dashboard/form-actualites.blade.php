@props(['actualites', 'route', 'isEdit'])

<h2>{{ $isEdit ? 'Éditer' : 'Ajouter' }} une actualités</h2>
<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Champ Nom de l'actualité -->
    <div class="form-cell">
        <label for="nom" class="form-label">Nom de l'actualité</label>
        <input type="text" class="form-control" id="nom" name="nom" @if ($isEdit) value="{{ old('nom', $actualites->nom) }}" @endif required>
    </div>

    <!-- Champ Contenu de l'actualité -->
    <div class="form-cell">
        <label for="contenu" class="form-label">Contenu de l'actualité</label>
        <textarea class="form-control" id="contenu" name="contenu" rows="4" required>@if ($isEdit){{ old('contenu', $actualites->contenu) }}@endif</textarea>
    </div>

    <!-- Champ Image de l'actualité -->
    <div class="form-cell">
        <label for="image" class="form-label">Image de l'actualité</label>
        <input type="file" class="form-control" id="image" name="image"@if ($isEdit){{ old('image', $actualites->image) }}@endif>
    </div>

    <!-- Bouton de soumission -->
    <button type="submit">{{ $isEdit ? 'Enregistrer les modifications' : 'Ajouter une actualité' }}</button>
</form>
