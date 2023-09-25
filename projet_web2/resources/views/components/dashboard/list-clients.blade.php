<ul class="list-dashboard">
    <h2 class="dashboard-h2">Liste des clients</h2>
    @if ($clients->isEmpty())
        <p class="aucun_client">Aucun client n'a fait de réservation</p>
    @else
        @foreach($clients as $client)
            <li class="list_li">
                <span>{{ $client->prenom }} {{ $client->nom }}:</span> {{ $client->forfait_nom }} 
                <div>Réservation faite le : {{ \Carbon\Carbon::parse($client->date_achat_forfait)->format('d/m/Y \à H:i') }}</div>
                <div class="btn_modif_sup">
                    <a href="{{ route('clients.edit', ['id' => $client->id]) }}">Modifier</a>
                    <a href="{{ route('clients.delete', ['id' => $client->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</a>
                </div>
            </li>
        @endforeach
    @endif
    @include('components.pagination', ['elements' => $clients, 'paginatorInfo' => ['currentPage' => $clients->currentPage(), 'lastPage' => $clients->lastPage()]])
</ul>
