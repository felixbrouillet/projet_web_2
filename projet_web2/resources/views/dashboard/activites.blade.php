<x-layout titre="Dashboard-Activités">
    <x-dashboard.liens-dashboard />

    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    <h1>Activités</h1>

    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.form-activites :activites="$activites" :isEdit="false" :route="route('activites.store')" />
    <x-dashboard.list-activites :activites="$activites" />
</x-layout>
