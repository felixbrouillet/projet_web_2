<x-layout titre="Dashboard">
    <x-dashboard.form-admin :user="$user" :route="route('admin.update', ['id' => $user->id])" :isEdit="true" />
</x-layout>
