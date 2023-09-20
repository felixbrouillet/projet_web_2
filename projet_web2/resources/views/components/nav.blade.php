<nav>
    <div class="icones">
        <div class="menu-toggle">
            <div class="hamburger-icon">
                <img src="/img/icones/menu_hamburger.png" class="menu_hamburger" alt="Menu">
            </div>
            {{-- LIENS À METTRE À JOUR!!! --}}
            <ul class="menu-links">
                <div class="close-icon" id="closeIcon">X</div>
                <div class="liens">
                    <li><a href="{{ route('index') }}">Accueil</a></li>
                    <li><a href="{{ route('forfaits.show') }}">Billetterie</a></li>
                    <li><a href="{{ route('activites.show') }}">Activités</a></li>
                    <li><a href="{{ route('actualites.show') }}">Actualités</a></li>
                    <li><a href="{{ route('user.reservation') }}">Mon compte</a></li>
                    <li><a href="{{ route('user.create') }}">Créer un compte</a></li>
                </div>
            </ul>
        </div>
        <a href="{{ route('login.show') }}">
            <img src="/img/icones/compte.png" class="image_compte" alt="Connexion">
        </a>
        @if(auth()->check())
            <a href="{{ route('logout') }}" class="logout">Déconnexion</a>
        @endif
    </div>
    <a href="{{ route('index') }}">
        <img src="/img/logos/logo_blanc_transparent.png" class="logo" alt="Logo de MFMF Music Festival">
    </a>
</nav>
