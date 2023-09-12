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
                'nom' => 'Nouveaux Artistes Annoncés',
                'contenu' => 'Découvrez les derniers artistes qui se produiront au festival cette année !',
                'image' => 'nouveaux-artistes.jpg',
            ],
            [
                'nom' => 'Planification des Horaires',
                'contenu' => 'Les horaires des performances et des activités sont maintenant disponibles. Planifiez votre week-end !',
                'image' => 'horaires.jpg',
            ],
            [
                'nom' => 'Concours de Remise de Billets',
                'contenu' => 'Participez à notre concours pour avoir une chance de gagner des billets gratuits pour le festival !',
                'image' => 'concours.jpg',
            ],
            [
                'nom' => 'Guide de Camping',
                'contenu' => 'Consultez notre guide de camping pour tout savoir sur le camping sur place pendant le festival.',
                'image' => 'camping.jpg',
            ],
        ];

        foreach ($actualites as $actualite) {
            Actualite::create($actualite);
        }
    }
}
