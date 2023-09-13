<x-layout titre="Accueil">
    <h2>Ajouter un employé</h2>
    <form action="{{ route('employes.store') }}" method="POST">
        @csrf
    
        <!-- Champ Prénom -->
        <div class="form-cell">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
    
        <!-- Champ Nom -->
        <div class="form-cell">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
    
        <!-- Champ Email -->
        <div class="form-cell">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    
        <!-- Champ Mot de passe -->
        <div class="form-cell">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    
        <!-- Champ role_id (fixé à 2) -->
        <input type="hidden" name="role_id" value="2">
    
        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary">Ajouter Employé</button>
    </form>
</x-layout>
