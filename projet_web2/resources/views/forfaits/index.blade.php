<x-layout titre="Forfaits">
    <main class="forfaits">
        <div class="header">
            <h1>Billetterie</h1>
            <p>Choisissez le forfait qui correspond le mieux à vos besoins</p>
        </div>
        @foreach ($forfaits as $forfait)
            <div class="forfait @if ($forfait->id % 2 == 0) forfait-pair @endif">
                <h2>{{ $forfait->nom }}</h2>
                <div class="forfait-details">
                    <p>{{ $forfait->details }}</p>
                    <div class="prix-et-reservation">
                        <p>{{ $forfait->prix }}$</p>
                        <a href="{{ route('forfaits.reservation', ['id' => $forfait->id]) }}"
                            class="btn_reservation">Réserver ce forfait</a>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
</x-layout>
