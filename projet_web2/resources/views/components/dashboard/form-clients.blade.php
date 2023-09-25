@props(['client', 'route', 'forfaits'])

<h2>Éditer un utilisateur</h2>
<form action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST">
    @csrf

    <!-- Champ Prénom -->
    <div class="form-cell">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $client->prenom) }}" required>
    </div>

    <!-- Champ Nom -->
    <div class="form-cell">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $client->nom) }}" required>
    </div>

    <!-- Champ Email -->
    <div class="form-cell">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $client->email) }}" required>
    </div>

    <!-- Champ Forfait ID -->
    <div class="form-cell">
        <label for="forfait_id" class="form-label">Forfait</label>
        <select class="form-control" id="forfait_id" name="forfait_id" required>
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
