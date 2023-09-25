<x-layout titre="Dashboard">
    <x-dashboard.form-actualites :actualite="$actualite" :route="route('actualites.update', ['id' => $actualite->id])" :isEdit="true" />
</x-layout>