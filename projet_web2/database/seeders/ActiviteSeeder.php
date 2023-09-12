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
                "nom" => "Grande Roue",
                "description" => "Profitez d'une vue imprenable depuis notre grande roue.",
                "image" => "grande-roue.jpg",
            ],
            [
                "nom" => "Foodtrucks Gourmands",
                "description" => "Découvrez une variété de délicieuses options culinaires dans nos foodtrucks.",
                "image" => "foodtrucks.jpg",
            ],
            [
                "nom" => "Espace de Relaxation",
                "description" => "Détendez-vous et rechargez vos batteries dans notre espace de relaxation zen.",
                "image" => "relaxation.jpg",
            ],
            [
                "nom" => "Spectacle de Feux d'Artifice",
                "description" => "Ne manquez pas notre spectacle de feux d'artifice époustouflant en soirée.",
                "image" => "feux-artifice.jpg",
            ],
        ];

        foreach ($activites as $activite) {
            Activite::create($activite);
        }
    }
}
