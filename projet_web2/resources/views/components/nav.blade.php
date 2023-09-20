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
                    @if (auth()->check())
                        @if (auth()->user()->role_id === 1)
                            <!-- L'utilisateur a un rôle avec role_id égal à 1 -->
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            <li><a href="{{ route('dashboard.index') }}">Admins</a></li>
                            <li><a href="{{ route('dashboard.actualites') }}">Actualités</a></li>
                            <li><a href="{{ route('dashboard.activites') }}">Activités</a></li>
                            <li><a href="{{ route('dashboard.clients') }}">Clients</a></li>
                        @elseif (auth()->user()->role_id === 2)
                            <!-- L'utilisateur a un rôle avec role_id égal à 2 -->
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            <li><a href="{{ route('forfaits.show') }}">Billetterie</a></li>
                            <li><a href="{{ route('activites.show') }}">Activités</a></li>
                            <li><a href="{{ route('actualites.show') }}">Actualités</a></li>
                        @endif                 
                    @endif                 
                </div>
            </ul>
        </div>
        <!-- Icône du compte utilisateur -->
        <div class="compte-toggle" id="compteToggle">
            @if (auth()->check())
                <img src="/img/icones/compte.png" class="image_compte" alt="Compte" id="compteIcon">
                <ul class="menu-links" id="compteMenu">
                    <div class="close-icon" id="closeCompteMenuIcon">X</div>
                    <div class="liens">
                        @if (auth()->user()->role_id === 1)
                            <!-- L'utilisateur a un rôle avec role_id égal à 1 -->
                        @elseif (auth()->user()->role_id === 2)
                            <!-- L'utilisateur a un rôle avec role_id égal à 2 -->
                            <li><a href="{{ route('user.reservation') }}">Mon compte</a></li>
                        @endif
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
