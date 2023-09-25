<x-layout titre="Dashboard-Clients">
    <x-dashboard.liens-dashboard />

    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />

    <h1>Tableau de bord</h1>

    <p>Connecté en tant que: {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</p>

    <x-dashboard.form-admin :user="$user" :isEdit="false" :route="route('admin.store', ['id' => Auth::user()->id])" />
    <x-dashboard.liste-admin :admins="$admins" />

    <a href="{{ route('logout') }}">Déconnexion</a>
</x-layout>
