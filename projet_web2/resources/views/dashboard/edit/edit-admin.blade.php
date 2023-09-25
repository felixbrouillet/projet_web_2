<x-layout titre="Dashboard">
<<<<<<< HEAD
    <a href="{{ route('dashboard.admins') }}" class="retour">Retour</a>
=======
>>>>>>> 14f7dfa70ba242ea128dc7653b9acdc838edc31b
    <x-dashboard.form-admin :user="$user" :route="route('admin.update', ['id' => $user->id])" :isEdit="true" />
    <a href="{{ route('dashboard.index') }}">Retour</a>
</x-layout>
