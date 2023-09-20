<x-layout titre="Dashboard">
    <x-dashboard.form-actualites :actualites="$actualites" :route="route('actualites.update', ['id' => $actualites->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>