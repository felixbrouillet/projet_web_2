<x-layout titre="Activités">
    <h1>Activités</h1>
    @foreach($activites as $activite)
        <h2>{{ $activite->nom }}</h2>
        <img src="{{ asset('img/images/' . $activite->image) }}" alt="{{ $activite->nom }}" width="300" height="200">
        <p>{{ $activite->description }}</p>
    @endforeach
</x-layout>
