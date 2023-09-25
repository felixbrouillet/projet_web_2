<x-layout titre="Dashboard">
    <a href="{{ route('dashboard.admin') }}" class="retour">Retour</a>
    <x-dashboard.form-admin :user="$user" :route="route('admin.update', ['id' => $user->id])" :isEdit="true" />
</x-layout>
