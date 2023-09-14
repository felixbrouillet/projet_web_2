<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Forfait</th>
            <th>Date d'achat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->prenom }}</td>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->forfait_nom }}</td>
                <td>{{ $client->date_achat_forfait }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
