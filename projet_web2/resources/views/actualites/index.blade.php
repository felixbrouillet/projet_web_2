<x-layout titre="Actualités">
    <main class="actualites">
        <h1>Actualités</h1>

        {{-- Messages d'alertes succes ou erreur --}}
        <x-alertes.alerte cle="succes" />
        <x-alertes.alerte cle="erreur" />

        @foreach ($actualites as $actualite)
            <div class="actualite">
                <h2>{{ $actualite->nom }}</h2>
                <div class="contenu">
                    <img src="{{ asset('img/images/' . $actualite->image) }}" alt="{{ $actualite->nom }}"
                        class="actualite-image">
                    <p>{{ $actualite->contenu }}</p>
                </div>
            </div>
        @endforeach
    </main>
</x-layout>
