<x-layout titre="Accueil">
    <main class="accueil">

        {{-- Messages d'alertes succes ou erreur --}}
        <x-alertes.alerte cle="succes" />
        <x-alertes.alerte cle="erreur" />

        <!-- Section de la vidéo sur la page d'accueil  ------------------------------------------------------------------------------->
        <h1 class="accueil">Festival de musique électronique à Montréal</h1>


        <div class="bouton_video_accueil">
            <a class="bouton_video_accueil" href="{{route('forfaits.show')}}">Acheter des billets</a>
            <img class="fleche_bouton" src="img/icones/fleche_blanche.png" alt="">
        </div>




        <div class="conteneur_video_presentation">
            <div class="video_presentation">
                <video autoplay loop muted src="img/mfmf_hero_video.mp4"> </video>
            </div>

        </div>

        <!-- Section qui affiche la programmation du festival -------------------------------------------------------------- -->
        <div class="conteneur_programmation">
            <h2 class="contenu_programmation">Programmation</h2>

            <div class="contenu_programmation">

                <div class="fiche_programmation">

                    <div class="contenu_fiche_programmation">

                        <img src="img/logos/logo_blanc_transparent.png" class="logo_fiche"
                            alt="Logo de MFMF Music Festival">
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p class="fiche_programmation_emplacement">Montréal, Québec, Canada</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p class="fiche_programmation_date">22-23-24 juillet 2023</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <div class="ligne_separation"></div>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p class="premiere_rangee">D4t4fl0w</p>
                        <p class="premiere_rangee">Voltage</p>
                        <p class="premiere_rangee">T3echvision</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p class="deuxieme_rangee">Pulse Wave</p>
                        <p class="deuxieme_rangee">Cybergroove</p>
                    </div>
                    <div class="contenu_fiche_programmation">
                        <p>SynthSorcerer</p>
                        <p>Energetic Echo</p>
                        <p>P1xelz</p>
                        <p>Binary Beats</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>Electric Alchemy</p>
                        <p>R0b0rythms</p>
                        <p>Analog</p>
                        <p>Sol4r Soundwave</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>holOrmonics</p>
                        <p>VirtualWAR</p>
                        <p>3herEdge</p>
                        <p>NeonNebula!</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>LostFus!ons</p>
                        <p>Vortex Vibes</p>
                        <p>The Techno Titan</p>
                        <p>Euphoria</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>WaveWanderer</p>
                        <p>Crystal Composer</p>
                        <p>NovaNectar</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>Psychedelic Pioneer</p>
                        <p>7Dreamer</p>
                        <p>Vi0lentPuls3</p>
                        <p>Oracle</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>R!ddmSerenade</p>
                        <p>Cyberspace</p>
                        <p>Euphoric Engineer</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>Nimbus</p>
                        <p>DigitalDynamo</p>
                        <p>Crafter</p>
                        <p>LunarB0!</p>
                    </div>

                    <div class="contenu_fiche_programmation">
                        <p>Rhapsody</p>
                        <p>3rthquake</p>
                    </div>

                    <!-- buffer pour libérer de l'espace en bas sans tout briser  -->
                    <div class="contenu_fiche_programmation">
                        <p></p>
                        <p></p>
                    </div>

                </div>
            </div>
        </div>

        <!-- section de la Carte intéractive, directions et coordonnées ---------------------------------------------------- -->
        <div class="section_carte_directions">

            <div class="conteneur_directions">
                <h2 class="accueil" >Directions</h2>
            </div>

            <div class="conteneur_carte_directions">
                <div class="conteneur_directions">

                    <div class="directions">

                        <div class="directions_sous_conteneur">

                            <img src="img/icones/gps.png" alt="">

                            <div class="directions_sous_conteneur_texte">
                                <p>1 Circuit Gilles Villeneuve, Montréal, QC H3C 1A9</p>
                            </div>

                        </div>

                        <div class="directions_sous_conteneur">

                            <img src="img/icones/email.png" alt="">

                            <div class="directions_sous_conteneur_texte">
                                <p>514-872-6120</p>
                            </div>

                        </div>

                        <div class="directions_sous_conteneur">

                            <img src="img/icones/phone-call.png" alt="">
                            <div class="directions_sous_conteneur_texte">
                                <p>admin@mfmffestival.ca</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="conteneur_carte">
                    <iframe class="carte"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11183.221732805709!2d-73.5338306!3d45.5139952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91b03473b92c9%3A0x46e7ac7562cb8303!2sParc%20Jean-Drapeau!5e0!3m2!1sfr!2sca!4v1694623360361!5m2!1sfr!2sca"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

        <!-- section pour les actualités --------------------------------------------------------------------------------------------------------- -->

        <div class="conteneur_h2_actualites">
            <h2 class="accueil">Actualités</h2>
        </div>
        @foreach ($actualites as $actualite)
        <div class="conteneur_actualites">
            <div class="sous_conteneur_actualites">
                <div class="contenu_actualites">
                    <div class="sous_contenu_actualites_h3">
                        <h3>{{ $actualite->nom }}</h3>
                    </div>

                </div>

                <div class="contenu_actualites">
                    <div class="contenu_actualites_breakpoint">
                        <div class="sous_contenu_actualites">
                            <img src="{{ asset('img/images/' . $actualite->image) }}" alt="{{ $actualite->nom }}">
                        </div>

                        <div class="sous_contenu_actualites">
                            <p class="article">{{ $actualite->contenu }}</p>
                        </div>
                    </div>
                </div>

                <div class="contenu_actualites">
                    <div class="sous_contenu_actualites_mobile">
                        <a href="{{ route('actualites.show') }}#actualite-{{ $actualite->id }}" class="lien_article">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

       <div class="conteneur_bouton_actualites">
           <a class="bouton_actualites" href="{{ route('actualites.show') }}">Voir toutes les actualités</a>
       </div>
    </main>
</x-layout>
