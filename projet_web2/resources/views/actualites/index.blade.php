<x-layout titre="Actualités">
    <h1>Nos actualités</h1>

    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    @foreach($actualites as $actualite)
        <p>{{ $actualite->nom }}</p>
        <p>{{ $actualite->contenu }}</p>
        <p>{{ $actualite->image }}</p>
    @endforeach
</x-layout>
