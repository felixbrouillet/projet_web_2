<x-layout titre="Dashboard">
    <a href="{{ route('dashboard.clients') }}" class="retour">Retour</a>
    <x-dashboard.form-clients :client="$client" :forfaits="$forfaits" :route="route('clients.update', ['id' => $client->id])" :isEdit="true" />
</x-layout>
