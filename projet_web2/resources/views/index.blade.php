<x-layout titre="Accueil">
    <a href="{{ route('login.show') }}">Connexion</a>
    <a href="{{ route('logout') }}">Déconnexion</a>
    <a href="{{ route('forfaits.show') }}">Voir les forfaits</a>
</x-layout>