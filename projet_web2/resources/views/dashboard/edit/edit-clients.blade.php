<x-layout titre="Dashboard">
    <x-dashboard.form-clients :clients="$clients" :route="route('clients.update', ['id' => $clients->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>
