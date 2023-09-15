<ul>
    @foreach($clients as $client)
        <li>
            {{ $client->prenom }} {{ $client->nom }}: {{ $client->forfait_nom }} Réservation faites le: {{ $client->date_achat_forfait }}
            <a href="{{ route('clients.edit', ['id' => $client->id]) }}">✏️</a>
            <a href="{{ route('clients.delete', ['id' => $client->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">🗑️</a>
        </li>
    @endforeach
</ul>
