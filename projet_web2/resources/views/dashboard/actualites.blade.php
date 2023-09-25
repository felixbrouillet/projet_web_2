<x-layout titre="Dashboard-Actualités">
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

<<<<<<< HEAD
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
=======
    <h1>Actualités</h1>

>>>>>>> 14f7dfa70ba242ea128dc7653b9acdc838edc31b
    <x-dashboard.form-actualites :actualites="$actualites" :isEdit="false" :route="route('actualites.store')" />
    <x-dashboard.list-actualites :actualites="$actualites" />
</x-layout>
