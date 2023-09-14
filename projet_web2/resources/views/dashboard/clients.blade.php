<x-layout titre="Dashboard-Clients">
    <x-dashboard.liens-dashboard />
    <h1>Liste des clients</h1>
    <x-dashboard.list-clients :clients="$clients" />
</x-layout>
