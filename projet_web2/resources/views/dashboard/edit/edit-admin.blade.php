<x-layout titre="Dashboard">
    <x-dashboard.form-admin :user="$user" :route="route('admin.update', ['id' => $user->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>
