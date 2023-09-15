<x-layout titre="Dashboard-Activités">
    <x-dashboard.liens-dashboard />
    <h1>Activités</h1>

    <x-dashboard.form-activites :activites="$activites" :isEdit="false" :route="route('activites.store')" />
    <x-dashboard.list-activites :activites="$activites" />
</x-layout>
