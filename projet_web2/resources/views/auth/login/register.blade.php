<x-layout titre="Connexion">
    <form action="{{ route('login.authentifier') }}" method="POST">
        @csrf
        <div>
            <label for="email">Courriel</label>
            <input type="email" name="email" autocomplete="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" autocomplete="current-password">
        </div>
        
        <button type="submit">
            Connexion !
        </button>

        <a href="{{ route('user.create') }}">Pas de compte ?</a>
    </form>
</x-layout>