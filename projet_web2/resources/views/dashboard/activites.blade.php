<x-layout titre="Dashboard-Activités">
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.list-activites :activites="$activites" />
    <x-dashboard.form-activites :activites="$activites" :isEdit="false" :route="route('activites.store')" />
</x-layout>
