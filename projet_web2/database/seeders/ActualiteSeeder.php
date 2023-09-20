<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actualite;

class ActualiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actualites = [
            [
                'nom' => "Vivez l'expérience ultime au festival de musique MFMF ! 🌟",
                'contenu' => "Le MFMF est de retour cette année pour vous offrir une programmation époustouflante qui satisfera tous les amateurs de musique.

                            Que pouvez-vous attendre cette année ?

                            🎶 Une programmation diversifiée : Du dubstep au house en passant par la musique EDM, nous avons rassemblé des artistes de tous les genres pour vous offrir une expérience musicale complète.

                            🎉 Des performances captivantes : Attendez-vous à des shows enflammés et des moments de pure magie musicale sur scène.

                            🍔🍹 Une expérience gastronomique : Notre festival ne se limite pas à la musique. Découvrez une variété de délices culinaires et de boissons rafraîchissantes pour satisfaire vos papilles.",
                'image' => 'stage_jour.jpg',
            ],
            [
                'nom' => "Préparez-vous pour un festival de musique inoubliable! 🎶🎉",
                'contenu' => "🚀 Le compte à rebours est lancé ! 🚀

                            Le MFMF est à nos portes, et l'excitation est à son comble ! Préparez-vous à une aventure musicale épique qui vous transportera dans un univers de sons envoûtants et de vibes incroyables. Les artistes se préparent, les scènes se montent, et tout est en place pour un week-end de pure magie musicale.

                            🎶 Quels artistes attendez-vous le plus de voir sur scène cette année ? Partagez vos choix dans les commentaires et préparez-vous à les applaudir en live ! 🙌 #Hâte #LineUpIncroyable #MusiqueElectronique",
                'image' => "dj.jpg",
            ],
            [
                'nom' => "Explorez l'expérience totale🎵",
                'contenu' => "Profitez de chaque instant au MFMF 🌅

                            Au-delà de la musique incroyable qui vous attend, le MFMF vous offre une expérience sensorielle totale. Détendez-vous dans notre espace chill-out, explorez nos installations artistiques étonnantes, et dansez sous les étoiles jusqu'au lever du soleil. C'est bien plus qu'un festival, c'est une aventure que vous n'oublierez jamais. 🌟✨ #VieDeFestival #Explorez #MomentsMémorables #FestivalMontreal",
                'image' => "festivalier.jpg",
            ],
            [
                'nom' => "Dernière chance pour les Billets Early Bird: Économisez Gros ! 🐦",
                'contenu' => "🎟️ Dernière chance pour les billets early bird ! 🎟️

                            Nos billets early bird se vendent comme des petits pains chauds, et il ne reste que quelques jours pour en profiter. Économisez gros en achetant dès maintenant et rejoignez-nous pour une fête musicale sensationnelle au MFMF. C'est l'opportunité de l'année que vous ne voulez pas manquer ! 🐦🎉 #OffreSpéciale #Économisez #FestivalMusiqueElectronique",
                'image' => "stage_nuit2.jpg",
            ],
            [
                'nom' => "Partagez avec le Hashtag #MFMF! 📷🌟",
                'contenu' => "🎉 Partagez vos moments préférés du MFMF ! 📸

                            Nous voulons voir le festival à travers vos yeux. Prenez des photos, capturez des vidéos et partagez vos moments mémorables en utilisant le hashtag #NomDuFestival sur les réseaux sociaux. Qui sait, votre contenu pourrait être présenté sur notre écran géant ! 📷📱 #FestivalDeMusique #SouvenirsInoubliables #MFMF

                            Profitez de chaque instant et partagez l'amour de la musique au MFMF ! 🎵💫",
                'image' => "concert_interieur.jpg",
            ],
        ];

        foreach ($actualites as $actualite) {
            Actualite::create($actualite);
        }
    }
}
