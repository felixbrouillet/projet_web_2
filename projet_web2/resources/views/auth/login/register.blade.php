<div class="auth">
    <x-layout titre="Connexion">
        <div class="container">

            {{-- Messages d'alertes succes ou erreur --}}
            <x-alertes.alerte cle="succes" />
            <x-alertes.alerte cle="erreur" />

            <h2 class="h2-connexion">Connexion</h2>
            <form class="formulaire auth" action="{{ route('login.authentifier') }}" method="POST">
                @csrf
                <div>
                    <input type="email" name="email" autocomplete="email" value="{{ old('email') }}" placeholder="Email">
                </div>
                <div>
                    <input type="password" name="password" autocomplete="current-password" placeholder="Mot de passe">
                </div>
                <button type="submit">Connexion</button>
                <a class="user-create" href="{{ route('user.create') }}">Pas de compte ?</a>
            </form>
        </div>
</div>
</x-layout>
</div>
