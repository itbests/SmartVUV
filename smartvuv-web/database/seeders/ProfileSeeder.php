<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert(['name_' => 'SuperAdmin','observation' => 'Perfil de usuario SuperAdministrador','status_id' => 1]);
        DB::table('profile')->insert(['name_' => 'General','observation' => 'Perfil de usuario General','status_id' => 1,]);
    }
}
