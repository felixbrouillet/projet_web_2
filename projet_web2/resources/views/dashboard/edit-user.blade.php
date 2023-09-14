<x-layout titre="Dashboard">
    <h1>Modifiez un admin</h1>
    <x-dashboard.form-admin :user="$user" :route="route('admin.update', ['id' => $user->id])" :isEdit="true" />
</x-layout>
