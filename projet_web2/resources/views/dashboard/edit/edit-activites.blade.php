<x-layout titre="Dashboard">
    <x-dashboard.form-activites :activites="$activites" :route="route('activites.update', ['id' => $activites->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>