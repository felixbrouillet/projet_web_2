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
                <h2>{{ $activite->nom }}</h2>
                <div class="activite-content">
                    <img src="{{ asset('img/images/' . $activite->image) }}" alt="{{ $activite->nom }}"
                        class="activite-image">
                    <p>{{ $activite->description }}</p>
                </div>
            </div>
        @endforeach
    </main>
</x-layout>
