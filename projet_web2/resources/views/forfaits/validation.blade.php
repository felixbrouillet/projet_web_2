<x-layout titre="Forfaits">
    <h1>Validation du Forfait</h1>
    <p>Nom du Forfait : {{ $forfait->nom }}</p>
    <p>Détails : {{ $forfait->details }}</p>
    <div>Êtes-vous sûr de vouloir réserver ce forfait ?</div>
    
    <form method="POST" action="{{ route('forfaits.update', ['id' => $forfait->id]) }}">
        @csrf
        <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">
        <button type="submit" name="action" value="confirmer">Oui</button>
        <button type="submit" name="action" value="annuler">Non</button>
    </form>
</x-layout>