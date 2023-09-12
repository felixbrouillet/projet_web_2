<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forfait;

class ForfaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forfaits = [
            [
                'nom' => 'Forfait Standard',
                'details' => 'Accès général au festival pendant les deux jours.',
                'prix' => 99,
                'infos_forfait' => 'Inclus : Accès à toutes les scènes, stands de nourriture et boissons.',
            ],
            [
                'nom' => 'Forfait VIP',
                'details' => 'Expérience VIP exclusive pendant le festival.',
                'prix' => 249,
                'infos_forfait' => 'Inclus : Accès VIP, sièges réservés, service de restauration VIP.',
            ],
            [
                'nom' => 'Forfait Camping',
                'details' => 'Camping sur le site du festival pendant tout le week-end.',
                'prix' => 49,
                'infos_forfait' => 'Inclus : Emplacement de camping, accès aux douches et aux toilettes.',
            ],
            [
                'nom' => 'Forfait Étudiant',
                'details' => 'Forfait spécial pour les étudiants avec réduction.',
                'prix' => 79,
                'infos_forfait' => 'Inclus : Accès au festival avec carte étudiante valide.',
            ],
        ];

        foreach ($forfaits as $forfait) {
            Forfait::create($forfait);
        }
    }
}
