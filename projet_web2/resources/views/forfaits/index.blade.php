<x-layout titre="Forfaits">
    <h1>Nos forfaits</h1>
    @foreach($forfaits as $forfait)
        <a href="{{ route('forfaits.reservation', ['id' => $forfait->id]) }}">
            <p>{{ $forfait->nom }}</p>
            <p>{{ $forfait->details }}</p>
            <p>{{ $forfait->prix }}$</p>
        </a>
        <a href="{{ route('index') }}">Retour à l'accueil</a>
    @endforeach
</x-layout>
