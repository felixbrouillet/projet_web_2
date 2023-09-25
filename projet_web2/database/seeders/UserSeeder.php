<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer un administrateur
        User::create([
            'prenom' => 'Admin',
            'nom' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'date_achat_forfait' => null,
        ]);

        // Créer des employés
        User::create([
            'prenom' => 'Utilisateur1',
            'nom' => 'Nom1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
            'date_achat_forfait' => null,
        ]);

        // Créer des utilisateurs réguliers
        User::create([
            'prenom' => 'Utilisateur2',
            'nom' => 'Nom2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
            'date_achat_forfait' => '2023-09-07',
        ]);
        User::create([
            'prenom' => 'Clien',
            'nom' => 'Nom',
            'email' => 'test@test.com',
            'password' => Hash::make('test'),
            'role_id' => 2,
            'date_achat_forfait' => '2023-09-07',
        ]);
        // Ajouter d'autres utilisateurs avec des données différentes ici...
    }
}
