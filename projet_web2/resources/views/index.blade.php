<x-layout titre="Accueil">
    <a href="{{ route('login.show') }}">Connexion</a>
    <a href="{{ route('logout') }}">Déconnexion</a>
    <a href="{{ route('forfaits.show') }}">Voir les forfaits</a>
    <a href="{{ route('activites.show') }}">Voir nos activites</a>
</x-layout>