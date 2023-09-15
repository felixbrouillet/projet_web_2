<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérez les rôles par défaut dans la table "roles"
        DB::table('roles')->insert([
            ['nom' => 'admin'],
            ['nom' => 'employé'],
            ['nom' => 'client'],
        ]);
    }
}
