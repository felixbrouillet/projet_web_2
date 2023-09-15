<x-layout titre="Dashboard">
    <x-dashboard.form-admin :actualite="$actualite" :route="route('actualites.update', ['id' => $actualite->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>