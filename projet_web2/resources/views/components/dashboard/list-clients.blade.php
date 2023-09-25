<h2 class="list-h2">Liste des clients</h2>
<ul class="list-dashboard">
    @if ($clients->isEmpty())
        <p>Aucun client n'a fait de réservation</p>
    @else
        @foreach($clients as $client)
            <li>
                {{ $client->prenom }} {{ $client->nom }}: {{ $client->forfait_nom }} Réservation faite le: {{ $client->date_achat_forfait }}
                <a href="{{ route('clients.edit', ['id' => $client->id]) }}">✏️</a>
                <a href="{{ route('clients.delete', ['id' => $client->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">🗑️</a>
            </li>
        @endforeach
    @endif
</ul>