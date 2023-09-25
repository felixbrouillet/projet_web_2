<x-layout titre="Dashboard">
    <a href="{{ route('dashboard.actualites') }}" class="retour">Retour</a>
    <x-dashboard.form-actualites :actualite="$actualite" :route="route('actualites.update', ['id' => $actualite->id])" :isEdit="true" />
</x-layout>