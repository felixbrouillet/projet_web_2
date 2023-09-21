<x-layout titre="Valider le forfait">
    <main class="validation">
        <div class="validation-forfait">
            <h1>Validation du Forfait</h1>
            <div class="forfait-info">
                <p>Forfait choisi: {{ $forfait->nom }}</p>
                <p>Détails: {{ $forfait->details }}</p>
                <p>Prix: {{ $forfait->prix }}$</p>
            </div>
            <div class="confirmation-message">Êtes-vous sûr de vouloir réserver ce forfait ?</div>

            <form method="POST" action="{{ route('forfaits.update', ['id' => $forfait->id]) }}" class="confirmation-form">
                @csrf
                <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">
                <button type="submit" name="action" value="confirmer" class="btn-confirmer">Oui</button>
                <button type="submit" name="action" value="annuler" class="btn-annuler">Non</button>
            </form>
        </div>
    </main>
</x-layout>
