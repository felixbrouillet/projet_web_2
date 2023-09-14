<x-layout titre="Dashboard">
    <x-dashboard.form-admin :activite="$activite" :route="route('activites.update', ['id' => $activite->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>