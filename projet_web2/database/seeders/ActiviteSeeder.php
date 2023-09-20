<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activite;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activites = [
            [
                "nom" => "Food trucks",
                "description" => "Pour satisfaire vos papilles affamées, nous avons rassemblé une incroyable flottille de food trucks, chacun plus délicieux que le précédent.

                            🌍Explorez un véritable monde de saveurs internationales et de créations culinaires audacieuses, des tacos épicés aux hamburgers gourmet, des pizzas croustillantes aux plats végétariens sains. Peu importe vos préférences, nos food trucks triés sur le volet sont là pour combler toutes vos envies gastronomiques ! 🌮🍔🍕🥗",
                "image" => "food_truck.jpg",
            ],
            [
                "nom" => "Grande roue",
                "description" => "Montez à bord de notre grande roue emblématique au festival de cette année et laissez-vous transporter vers de nouveaux sommets d'excitation ! 🎡✨🎶

                            Notre grande roue majestueuse offre une expérience inoubliable qui vous permettra de voir le festival sous un angle totalement différent. Peu importe où vous vous trouvez dans le festival, chaque tour dans la grande roue vous offre une vue panoramique à couper le souffle sur l'ensemble de l'événement. 🌆🎶🌟",
                "image" => "grande_roue_nuit1.jpg",
            ],
            [
                "nom" => "La chill zone",
                "description" => "Parce que nous savons que les festivals peuvent être intenses, nous avons créé une oasis de tranquillité au cœur de l'effervescence : notre zone de relaxation.

                            Cette zone paisible vous offre l'occasion de vous ressourcer, de vous détendre et de recharger vos batteries entre les sets de musique endiablés. Installez-vous confortablement sur des coussins moelleux, respirez profondément l'air frais et oubliez le stress de la vie quotidienne. 🌿🧘‍♀️🍃",
                "image" => "chill_zone.jpg",
            ],
            [
                "nom" => "La B-Ball zone",
                "description" => "Que vous soyez un fanatique du basketball ou simplement à la recherche d'une pause amusante entre les sets de musique, notre zone de basketball vous offre la possibilité de jouer tout en vibraphonant au rythme de la musique en live.

                            Alors, préparez-vous à montrer vos compétences, à marquer des paniers spectaculaires et à vivre des moments inoubliables. C'est plus qu'un jeu, c'est une expérience ! 🎶🏀🤩",
                "image" => "bball.jpg",
            ],
            [
                "nom" => "Le photobooth",
                "description" => "Pour capturer vos moments mémorables de festival d'une manière amusante et unique, nous avons mis en place un photobooth sensationnel ! 📸🎉✨

                            Notre photobooth est l'endroit où la créativité et l'amusement se rencontrent. Que vous soyez seul, avec des amis ou en famille, c'est l'occasion parfaite pour créer des souvenirs instantanés que vous chérirez longtemps après la fin du festival. 🤳👨‍👩‍👧‍👦🌟",
                "image" => "photobooth.jpg",
            ],
            [
                "nom" => "Stand de maquillage",
                "description" => "Transformez-vous en une œuvre d'art vivante grâce à notre stand de maquillage professionnel au festival de cette année ! 💄🎨✨

                            Nos talentueuses maquilleuses sont là pour vous offrir une expérience de beauté exceptionnelle. Pour un look de festival tendance ou une transformation complète, notre équipe expérimentée saura vous aider à réaliser votre vision.  Vous pouvez choisir parmi une gamme de styles, des maquillages naturels et sophistiqués aux looks audacieux et artistiques. ✨🎶🌟💅👄",
                "image" => "makeup.jpg",
            ],
            [
                "nom" => "Merch sur place",
                "description" => "Explorez notre stand de merchandising au festival cette année pour repartir avec des souvenirs qui dureront toute une vie !

                            Que vous souhaitiez montrer votre soutien à vos artistes préférés, trouver le t-shirt parfait pour commémorer l'événement ou cherchiez des articles de collection uniques, notre stand de merch a tout ce dont vous avez besoin. Découvrez une gamme de produits de qualité, des t-shirts aux casquettes, des affiches aux autocollants, et bien plus encore ✨🎵👚",
                "image" => "merch.jpg",
            ],
        ];

        foreach ($activites as $activite) {
            Activite::create($activite);
        }
    }
}
