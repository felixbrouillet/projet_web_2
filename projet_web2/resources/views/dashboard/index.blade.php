<x-layout titre="Dashboard">
    <h1>Tableau de bord</h1>
    
        <p>Connecté en tant que: {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</p>
        <x-dashboard.ajout-admin />
        <x-dashboard.liste-admin :admins="$admins" />
    <a href="{{ route('logout') }}">Déconnexion</a>
</x-layout>
