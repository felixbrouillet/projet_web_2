<x-layout titre="Forfaits">
    <main class="forfaits">

        {{-- Messages d'alertes succes ou erreur --}}
        <x-alertes.alerte cle="succes" />
        <x-alertes.alerte cle="erreur" />


        <div class="header">
            <h1>Billetterie</h1>
            <p>Choisissez le forfait qui correspond le mieux à vos besoins</p>
        </div>
        @foreach ($forfaits as $forfait)
            <div class="forfait @if ($forfait->id % 2 == 0) forfait-pair @endif">
                <h2>{{ $forfait->nom }}</h2>
                <p>{{ $forfait->details }}</p>
                <div class="prix-et-reservation">
                    <div class="prix">
                        <p>{{ $forfait->prix }}$</p>
                        <div class="frais-et-taxes">
                            (frais et taxes inclus)
                        </div>
                    </div>
                    <a href="{{ route('forfaits.reservation', ['id' => $forfait->id]) }}" class="btn_reservation">Réserver
                        ce forfait</a>
                </div>
            </div>
        @endforeach
    </main>
</x-layout>
