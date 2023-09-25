<x-layout titre="Votre réservation">
    <div class="account">
        {{-- Messages d'alertes succes ou erreur --}}
        <x-alertes.alerte cle="succes" />
        <x-alertes.alerte cle="erreur" />
        <div class="account-info">
            <h1>Réservation du forfait</h1>
            @if ($forfait)
                <div class="forfait-info">
                    <p>Forfait : {{ $forfait->nom }}</p>
                    <p>Détails : {{ $forfait->details }}</p>
                </div>
                <div class="reservation-actions">
                    <a href="{{ route('forfaits.delete') }}" class="cancel-link"
                        onclick="return confirm('Êtes-vous sûr de vouloir annuler votre réservation ?')">Annuler ma
                        réservation</a>
                </div>
            @else
                <p>Vous n'avez aucun forfait de réservé pour le moment.</p>
                <div class="reservation-actions">
                    <a href="{{ route('forfaits.show') }}" class="explore-link">Découvrir nos forfaits</a>
                </div>
            @endif
        </div>
    </div>
</x-layout>
