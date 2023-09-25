<x-layout titre="Dashboard">
    <a href="{{ route('dashboard.activites') }}" class="retour">Retour</a>
    <x-dashboard.form-activites :activite="$activite" :route="route('activites.update', ['id' => $activite->id])" :isEdit="true" />
</x-layout>
