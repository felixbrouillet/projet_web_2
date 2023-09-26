<x-layout titre="Dashboard-Actualités">
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.list-actualites :actualites="$actualites" />
    <x-dashboard.form-actualites :actualites="$actualites" :isEdit="false" :route="route('actualites.store')" />
</x-layout>
