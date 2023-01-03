<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsParameter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameter')->insert(['name_' => 'ACTIVE_STATUS', 'description' => 'Estado activo', 'value' => '1', 'type' => 'N']);
        DB::table('parameter')->insert(['name_' => 'DEFAULT_PROFILE', 'description' => 'Perfil de usuario General', 'value' => '2', 'type' => 'N']);
        DB::table('parameter')->insert(['name_' => 'ELEMENT_MENU_TYPE', 'description' => 'Opciones árbol de menú', 'value' => '3', 'type' => 'N']);
    }
}
