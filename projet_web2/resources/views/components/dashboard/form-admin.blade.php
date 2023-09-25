@props(['user', 'route', 'isEdit'])

<div class="container">
    <form class="formulaire" action="{{ $route }}" method="POST">
        <h2 class="dashboard-h2">{{ $isEdit ? 'Éditer' : 'Ajouter' }} un administrateur</h2>

        @csrf
        <!-- Champ Prénom -->
        <div>
            <input type="text" id="prenom" name="prenom" @if ($isEdit) value="{{ old('prenom', $user->prenom) }}" @endif required placeholder="Prénom">
        </div>

        <!-- Champ Nom -->
        <div>
            <input type="text" id="nom" name="nom" @if ($isEdit) value="{{ old('nom', $user->nom) }}" @endif required placeholder="Nom">
        </div>

        <!-- Champ Email -->
        <div>
            <input type="email" id="email" name="email" @if ($isEdit) value="{{ old('email', $user->email) }}" @endif required placeholder="Email">
        </div>

        <!-- Champ Mot de passe -->
        
        <div>
            <input type="password" id="password" name="password" @if ($isEdit) value="{{ old('password', $user->password) }}" @endif required placeholder="Mot de passe">
        </div>

        <!-- Champ caché pour role_id -->
        <input type="hidden" name="role_id" value="1">

        <!-- Bouton de soumission -->
        <button type="submit">{{ $isEdit ? 'Enregistrer les modifications' : 'Ajouter un administrateur' }}</button>
    </form>
</div>
