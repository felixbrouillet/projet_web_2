<x-layout titre="Dashboard">
    <x-dashboard.form-clients :client="$client" :forfaits="$forfaits" :route="route('clients.update', ['id' => $client->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>
