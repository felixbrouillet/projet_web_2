<x-layout titre="Dashboard-Activités">
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.form-activites :activites="$activites" :isEdit="false" :route="route('activites.store')" />
    <x-dashboard.list-activites :activites="$activites" />
</x-layout>
