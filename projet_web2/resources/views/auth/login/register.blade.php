<body class="auth">
    <x-layout titre="Connexion">
        <h2>Connectez-vous</h2>
        <form class="auth" action="{{ route('login.authentifier') }}" method="POST">
            @csrf
            <div>
                <input type="email" name="email" autocomplete="email" value="{{ old('email') }}" placeholder="Email">
            </div>
    
            <div>
                <input type="password" name="password" autocomplete="current-password" placeholder="Mot de passe">
            </div>
    
            <button type="submit">Connexion</button>
    
            <a href="{{ route('user.create') }}">Pas de compte ?</a>
        </form>
    </x-layout>
</body>