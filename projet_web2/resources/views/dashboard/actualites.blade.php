<x-layout titre="Dashboard-Actualités">
    <x-dashboard.liens-dashboard />
    <h1>Actualités</h1>

    <x-dashboard.form-actualites :actualites="$actualites" :isEdit="false" :route="route('actualites.store')" />
    <x-dashboard.list-actualites :actualites="$actualites" />
</x-layout>
