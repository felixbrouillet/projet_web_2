<x-layout titre="Dashboard-Admin">
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.liste-admin :admins="$admins" />
    <x-dashboard.form-admin :user="$user" :isEdit="false" :route="route('admin.store', ['id' => $user->id])" />
</x-layout>
