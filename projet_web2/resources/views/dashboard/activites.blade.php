<x-layout titre="Dashboard-Activités">
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

<<<<<<< HEAD
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
=======
    <h1>Activités</h1>

>>>>>>> 14f7dfa70ba242ea128dc7653b9acdc838edc31b
    <x-dashboard.form-activites :activites="$activites" :isEdit="false" :route="route('activites.store')" />
    <x-dashboard.list-activites :activites="$activites" />
</x-layout>
