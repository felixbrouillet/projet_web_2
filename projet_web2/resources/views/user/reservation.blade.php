<x-layout titre="Votre réservation">
    <h1>Réservation du Forfait</h1>
    @if ($forfait)
        <p>Nom du Forfait : {{ $forfait->nom }}</p>
        <p>Détails : {{ $forfait->details }}</p>
    @else
        <p>Aucun forfait.</p>
        <a href="{{ route('forfaits.show') }}">Trouvez ce qui vous convient</a>
    @endif
</x-layout>
