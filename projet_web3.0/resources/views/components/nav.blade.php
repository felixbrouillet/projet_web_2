<nav>
    <div class="icones">
        <!-- Icône du menu hamburger -->
        <div class="menu-toggle">
            <div class="hamburger-icon">
                <img src="/img/icones/menu_hamburger.png" class="menu_hamburger" alt="Menu">
            </div>
            <ul class="menu-links">
                <div class="close-icon" id="closeIcon">X</div>
                <div class="liens">
                    <li><a href="{{ route('index') }}">Accueil</a></li>
                    <li><a href="{{ route('forfaits.show') }}">Billetterie</a></li>
                    <li><a href="{{ route('activites.show') }}">Activités</a></li>
                    <li><a href="{{ route('actualites.show') }}">Actualités</a></li>
                </div>
            </ul>
        </div>
        <!-- Icône du compte utilisateur -->
        <div class="compte-toggle" id="compteToggle">
            @if (auth()->check())
                <!-- Si l'utilisateur est connecté, affichez le sous-menu -->
                <img src="/img/icones/compte.png" class="image_compte" alt="Compte" id="compteIcon">
                <ul class="menu-links" id="compteMenu">
                    <div class="close-icon" id="closeCompteMenuIcon">X</div>
                    <div class="liens">
                        <li><a href="{{ route('user.reservation') }}">Mon compte</a></li>
                        <li><a href="{{ route('logout') }}">Déconnexion</a></li>
                    </div>
                </ul>
            @else
                <!-- Si l'utilisateur n'est pas connecté, affichez simplement le lien de connexion -->
                <a href="{{ route('login.show') }}">
                    <img src="/img/icones/compte.png" class="image_compte" alt="Connexion" id="compteIcon">
                </a>
            @endif
        </div>
    </div>
    <a href="{{ route('index') }}">
        <img src="/img/logos/logo_blanc_transparent.png" class="logo" alt="Logo de MFMF Music Festival">
    </a>
</nav>
