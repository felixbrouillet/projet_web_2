<x-layout titre="Dashboard-Admin">
    <x-dashboard.liens-dashboard />
    <h2>Tableau de bord</h2>

    <p>Connecté en tant que: {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</p>

    <x-dashboard.form-admin :user="$user" :isEdit="false" :route="route('admin.store', ['id' => $user->id])" />
    <x-dashboard.liste-admin :admins="$admins" />

    <a href="{{ route('logout') }}">Déconnexion</a>
</x-layout>
