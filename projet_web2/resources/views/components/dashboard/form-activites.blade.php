@props(['activites', 'route', 'isEdit'])

<h2>{{ $isEdit ? 'Éditer' : 'Ajouter' }} une activité</h2>
<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Champ Nom de l'activité -->
    <div class="form-cell">
        <input type="text" class="form-control" id="nom" name="nom" @if ($isEdit) value="{{ old('nom', $activites->nom) }}" @endif required placeholder="Nom de l'activité">
    </div>

    <!-- Champ Description de l'activité -->
    <div class="form-cell">
        <textarea class="form-control" id="description" name="description" rows="4" required>@if ($isEdit){{ old('description', $activites->description) }}@endif</textarea placeholder="Description de l'activité">
    </div>

    <!-- Champ Image de l'activité -->
    <div class="form-cell">
        <label for="image" class="form-label">Image de l'activité</label>
        <input type="file" class="form-control" id="image" name="image"@if ($isEdit){{ old('description', $activites->image) }}@endif>
    </div>

    <!-- Bouton de soumission -->
    <button type="submit">{{ $isEdit ? 'Enregistrer les modifications' : 'Ajouter une activité' }}</button>
</form>
