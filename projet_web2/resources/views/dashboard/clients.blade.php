<x-layout titre="Dashboard-Clients">
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />
<<<<<<< HEAD
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
=======

    <h1>Liste des clients</h1>
>>>>>>> 14f7dfa70ba242ea128dc7653b9acdc838edc31b
    <x-dashboard.list-clients :clients="$clients" />
</x-layout>
