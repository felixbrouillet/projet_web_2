<x-layout titre="Activités">
    <header>
        <x-nav></x-nav>
        <div class="hero_activites">
            <h1>Activités</h1>
        </div>
    </header>
    <main class="activites">
        @foreach ($activites as $activite)
        <div class="activite">
            <img src="{{ asset('img/images/' . $activite->image) }}" alt="{{ $activite->nom }}" class="activite-image">
            <div class="activite-content">
                <h2>{{ $activite->nom }}</h2>
                <p>{{ $activite->description }}</p>
            </div>
        </div>
        @endforeach
    </main>
</x-layout>
