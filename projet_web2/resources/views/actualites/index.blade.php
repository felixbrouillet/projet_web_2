<x-layout titre="Actualités">
    <h1>Nos actualités</h1>
    @foreach($actualites as $actualite)
        <p>{{ $actualite->nom }}</p>
        <p>{{ $actualite->contenu }}</p>
        <p>{{ $actualite->image }}</p>
    @endforeach
</x-layout>
