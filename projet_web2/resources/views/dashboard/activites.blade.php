<x-layout titre="Dashboard-Activités">
    <x-dashboard.liens-dashboard />

    <x-dashboard.form-activites :activites="$activites" :isEdit="false" :route="route('activites.store')" />
    <x-dashboard.list-activites :activites="$activites" />
</x-layout>
