<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Générer un forfait_id aléatoire entre 1 et 3
        $forfaitId = $this->faker->numberBetween(1, 3);

        // Générer une date et heure aléatoire pour date_achat_forfait
        $dateAchatForfait = $this->faker->dateTimeThisYear();

        return [
            'prenom' => $this->faker->firstName(),
            'nom' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'), // Vous pouvez changer cela selon vos besoins
            'remember_token' => Str::random(10),
            'forfait_id' => $forfaitId,
            'role_id' => 2,
            'date_achat_forfait' => $dateAchatForfait,
        ];
    }
}
