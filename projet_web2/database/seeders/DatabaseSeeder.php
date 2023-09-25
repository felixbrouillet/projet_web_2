<?php

namespace Database\Seeders;
use Database\Seeders\UserSeeder;
use Database\Seeders\ActiviteSeeder;
use Database\Seeders\ActualiteSeeder;
use Database\Seeders\ForfaitSeeder;
use Database\Seeders\RoleSeeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'prenom' => 'Admin',
            'nom' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'date_achat_forfait' => null,
        ]);

        // Utiliser la factory pour créer 200 clients
        User::factory()->count(200)->create();
        $this->call(ActiviteSeeder::class);
        $this->call(ActualiteSeeder::class);
        $this->call(ForfaitSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
