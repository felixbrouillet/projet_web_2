<div class="create">
    <x-layout titre="Créer un compte">

        {{-- Messages d'alertes succes ou erreur --}}
        <x-alertes.alerte cle="succes" />
        <x-alertes.alerte cle="erreur" />

        <div class="container create"> <!-- Ajoutez la classe au conteneur du formulaire -->
            <h2 class="h2-connexion">Créer un compte</h2>
            <form class="formulaire create" action="{{ route('user.store') }}" method="POST">
                @csrf
                <!-- Champ Prénom -->
                <div>
                    <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom" required>
                </div>
                <!-- Champ Nom -->
                <div class="form-cell">
                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Nom" required>
                </div>
                <!-- Champ Email -->
                <div>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                </div>
                <!-- Champ Mot de passe -->
                <div>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                </div>
                <!-- Champ Confirmation du mot de passe -->
                <div>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                </div>
                <input type="hidden" name="role_id" value="2">
                <!-- Bouton de soumission -->
                <button type="submit">Créer un compte</button>
            </form>
        </div>
    </x-layout>
</div>
