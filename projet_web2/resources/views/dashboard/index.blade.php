<x-layout titre="Dashboard">
    <h1>Tableau de bord</h1>
    
    @if(Auth::check())
        <p>Connecté en tant qu'{{ Auth::user()->role->nom }}</p>

        @if(Auth::user()->role->nom === 'admin')
            <x-ajout-employe />
        @elseif(Auth::user()->role->nom === 'employé')
            <p>Vous êtes un employé vous pouvez faire des choses d'employé</p>
        @endif
    @endif

    <a href="{{ route('logout') }}">Déconnexion</a>
</x-layout>
