<x-layout titre="Votre réservation">
    <h1>Réservation du Forfait</h1>
    @if ($forfait)
        <p>Nom du Forfait : {{ $forfait->nom }}</p>
        <p>Détails : {{ $forfait->details }}</p>
        <a href="{{ route('forfaits.delete') }}" onclick="return confirm('Êtes-vous sûr de vouloir annuler votre réservation ?')">Annuler ma réservation</a>
    @else
        <p>Aucun forfait.</p>
        <a href="{{ route('forfaits.show') }}">Trouvez ce qui vous convient</a>
    @endif
</x-layout>
