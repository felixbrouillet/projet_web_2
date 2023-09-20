<x-layout titre="Dashboard">
    <x-dashboard.form-activites :activite="$activite" :route="route('activites.update', ['id' => $activite->id])" :isEdit="true" />
    <a href="{{ route('dashboard.activites') }}">Retour</a>
</x-layout>
