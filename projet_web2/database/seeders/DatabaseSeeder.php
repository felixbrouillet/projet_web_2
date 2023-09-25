<?php

namespace Database\Seeders;
use Database\Seeders\UserSeeder;
use Database\Seeders\ActiviteSeeder;
use Database\Seeders\ActualiteSeeder;
use Database\Seeders\ForfaitSeeder;
use Database\Seeders\RoleSeeder;

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
        $this->call(UserSeeder::class);
        $this->call(ActiviteSeeder::class);
        $this->call(ActualiteSeeder::class);
        $this->call(ForfaitSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
