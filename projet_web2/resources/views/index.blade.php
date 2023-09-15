<x-layout titre="Accueil">
    <a href="{{ route('user.reservation') }}">Ma réservation</a>
    <a href="{{ route('login.show') }}">Connexion</a>
    <a href="{{ route('logout') }}">Déconnexion</a>
    <a href="{{ route('forfaits.show') }}">Voir les forfaits</a>
    <a href="{{ route('activites.show') }}">Voir nos activites</a>
    <a href="{{ route('actualites.show') }}">Voir toutes les actualités</a>
    <a href="{{ route('user.create') }}">Créer un compte</a>
</x-layout>
