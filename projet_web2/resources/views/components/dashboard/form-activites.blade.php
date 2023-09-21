@props(['activite', 'route', 'isEdit'])

<div class="container">
    <h2>{{ $isEdit ? 'Éditer' : 'Ajouter' }} une activité</h2>
    <form class="formulaire" action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <!-- Champ Nom de l'activité -->
        <div>
            <input type="text" id="nom" name="nom" @if ($isEdit) value="{{ old('nom', $activite->nom) }}" @endif required placeholder="Nom de l'activité">
        </div>
    
        <!-- Champ Description de l'activité -->
        <div>
            <textarea id="description" name="description" rows="10" required placeholder="Description de l'activité">@if ($isEdit){{ old('description', $activite->description) }}@endif</textarea>
        </div>
    
        <!-- Champ Image de l'activité -->
        <div>
            <input type="file" id="image" name="image"@if ($isEdit){{ old('image', $activite->image) }}@endif>
        </div>
    
        <!-- Bouton de soumission -->
        <button type="submit">{{ $isEdit ? 'Enregistrer les modifications' : 'Ajouter une activité' }}</button>
    </form>
</div>
