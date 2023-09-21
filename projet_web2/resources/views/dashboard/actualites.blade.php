<x-layout titre="Dashboard-Actualités">
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.form-actualites :actualites="$actualites" :isEdit="false" :route="route('actualites.store')" />
    <x-dashboard.list-actualites :actualites="$actualites" />
</x-layout>
