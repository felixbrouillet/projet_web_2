<x-layout titre="Dashboard-Clients">
    <x-dashboard.liens-dashboard />

    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    <h1>Liste des clients</h1>
    <x-dashboard.list-clients :clients="$clients" />
</x-layout>
