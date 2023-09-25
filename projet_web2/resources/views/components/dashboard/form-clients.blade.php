@props(['client', 'route', 'forfaits'])

<div class="container">
    <form class="formulaire" action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST">
        <h2 class="dashboard-h2">Éditer un utilisateur</h2>
        
        @csrf

        <!-- Champ Prénom -->
        <div class="form-cell">
            <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $client->prenom) }}" required placeholder="Prénom">
        </div>

        <!-- Champ Nom -->
        <div>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $client->nom) }}" required placeholder="Nom">
        </div>

        <!-- Champ Email -->
        <div>
            <input type="email" id="email" name="email" value="{{ old('email', $client->email) }}" required placeholder="Email">
        </div>

        <!-- Champ Forfait ID -->
        <div>
            <select id="forfait_id" name="forfait_id" required>
                @foreach ($forfaits as $forfait)
                    <option value="{{ $forfait->id }}" {{ $forfait->id === $client->forfait_id ? 'selected' : '' }}>
                        {{ $forfait->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit">Enregistrer les modifications</button>
    </form>
</div>
