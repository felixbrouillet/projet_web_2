<x-layout titre="Activités">
    <header>
        <div class="hero_activites">
            <h1>Activités</h1>
        </div>
    </header>
    <main class="activites">
        {{-- Messages d'alertes succes ou erreur --}}
        <x-alertes.alerte cle="succes" />
        <x-alertes.alerte cle="erreur" />
        @foreach ($activites as $activite)
        <div class="activite @if ($activite->id % 2 == 0) activite-pair @endif">
            <img src="{{ asset('img/images/' . $activite->image) }}" alt="{{ $activite->nom }}" class="activite-image">
            <div class="activite-content">
                <h2>{{ $activite->nom }}</h2>
                <p>{{ $activite->description }}</p>
            </div>
        </div>
        @endforeach
    </main>
</x-layout>
