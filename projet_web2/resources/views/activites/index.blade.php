<x-layout titre="Activités">
    <h1>Nos activités</h1>
    @foreach($activites as $activite)
        <p>{{ $activite->nom }}</p>
        <p>{{ $activite->description }}</p>
        <p>{{ $activite->image }}</p>
    @endforeach
</x-layout> 