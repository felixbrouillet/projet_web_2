<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forfait;

class ForfaitSeeder extends Seeder
{
    // Fonction pour formater le détail avec des retours à la ligne
    private function formatDetails($details)
    {
        return implode("\n", array_map('trim', explode("\n", $details)));
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forfaits = [
            [
                'nom' => 'Admission générale',
                'details' => $this->formatDetails('
                    Accès général au festival pendant les trois jours.
                    Accès à toutes les scènes et zones du festival.
                    Possibilité de camper sur le site du festival (emplacement non réservé).
                    Accès aux stands de restauration et de boissons.
                    Accès aux zones de repos et aux espaces de détente.'),
                'prix' => 149,
            ],
            [
                'nom' => 'Forfait VIP',
                'details' => 'Accès VIP exclusif au festival pendant les trois jours.
                              Accès à toutes les scènes et zones du festival, y compris une zone VIP réservée.
                              Accès à une zone VIP avec bar premium et service de restauration exclusif.
                              Accès aux toilettes VIP.
                              Kit de festival VIP comprenant des goodies et des avantages exclusifs.
                              Possibilité de camper sur le site du festival (emplacement VIP réservé).',
                'prix' => 349,
            ],
            [
                'nom' => 'Forfait Premium',
                'details' => "Accès premium au festival pendant les trois jours.
                              Accès à toutes les scènes et zones du festival, incluant la zone premium réservée.
                              Accès à une zone premium avec bar illimité et service de restauration.
                              Accès aux toilettes premium.
                              Panier cadeau comprenant des goodies, un t-shirt exclusif et d'autres surprises.
                              Accès prioritaire à toutes les activités du festival.
                              Possibilité de camper sur le site du festival (emplacement premium réservé).
                              Rencontre exclusive avec un DJ ou un artiste (réservation requise).",
                'prix' => 599,
            ],
        ];

        foreach ($forfaits as $forfait) {
            Forfait::create($forfait);
        }
    }
}
