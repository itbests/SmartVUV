<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_type')->insert(['id' => 1, 'name_' => 'Opción Padre']);
        DB::table('menu_type')->insert(['id' => 2, 'name_' => 'Opción Hija (despliega formulario)']);
        DB::table('menu_type')->insert(['id' => 3, 'name_' => 'Elemento en Formulario']);
    }
}
