<x-layout titre="Dashboard-Actualités">
    <x-dashboard.liens-dashboard />

    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    <h1>Actualités</h1>

    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.form-actualites :actualites="$actualites" :isEdit="false" :route="route('actualites.store')" />
    <x-dashboard.list-actualites :actualites="$actualites" />
</x-layout>
