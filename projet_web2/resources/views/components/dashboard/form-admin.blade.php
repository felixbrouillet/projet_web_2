@props(['user', 'route', 'isEdit'])

<h2>{{ $isEdit ? 'Éditer' : 'Ajouter' }} un administrateur</h2>
<form action="{{ $route }}" method="POST">
    @csrf
    <!-- Champ Prénom -->
    <div class="form-cell">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" @if ($isEdit) value="{{ old('prenom', $user->prenom) }}" @endif required>
    </div>

    <!-- Champ Nom -->
    <div class="form-cell">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" @if ($isEdit) value="{{ old('nom', $user->nom) }}" @endif required>
    </div>

    <!-- Champ Email -->
    <div class="form-cell">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" @if ($isEdit) value="{{ old('email', $user->email) }}" @endif required>
    </div>

    <!-- Champ Mot de passe -->
    
    <div class="form-cell">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" @if ($isEdit) value="{{ old('password', $user->password) }}" @endif required>
    </div>

    <!-- Champ caché pour role_id -->
    <input type="hidden" name="role_id" value="1">

    <!-- Bouton de soumission -->
    <button type="submit">{{ $isEdit ? 'Enregistrer les modifications' : 'Ajouter un administrateur' }}</button>
</form>
