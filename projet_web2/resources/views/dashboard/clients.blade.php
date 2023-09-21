<x-layout titre="Dashboard-Clients">
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.list-clients :clients="$clients" />
</x-layout>
