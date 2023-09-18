<x-layout titre="Créer un compte">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <!-- Champ Prénom -->
        <div class="form-cell">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
        </div>

        <!-- Champ Nom -->
        <div class="form-cell">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}"
                required>
        </div>

        <!-- Champ Email -->
        <div class="form-cell">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                required>
        </div>

        <!-- Champ Mot de passe -->
        <div class="form-cell">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Champ Confirmation du mot de passe -->
        <div class="form-cell">
            <label for="password_confirmation" class="form-label">Confirmation du mot de passe</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                required>
        </div>

        <input type="hidden" name="role_id" value="2">

        <!-- Bouton de soumission -->
        <button type="submit">Créer un compte</button>
    </form>
</x-layout>
