<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->insert(['id' => 5, 'name_' => 'ANTIOQUIA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 8, 'name_' => 'ATLANTICO', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 11, 'name_' => 'BOGOTA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 13, 'name_' => 'BOLIVAR', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 15, 'name_' => 'BOYACA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 17, 'name_' => 'CALDAS', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 18, 'name_' => 'CAQUETA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 19, 'name_' => 'CAUCA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 20, 'name_' => 'CESAR', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 23, 'name_' => 'CORDOBA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 25, 'name_' => 'CUNDINAMARCA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 27, 'name_' => 'CHOCO', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 41, 'name_' => 'HUILA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 44, 'name_' => 'LA GUAJIRA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 47, 'name_' => 'MAGDALENA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 50, 'name_' => 'META', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 52, 'name_' => 'NARIÑO', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 54, 'name_' => 'N. DE SANTANDER', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 63, 'name_' => 'QUINDIO', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 66, 'name_' => 'RISARALDA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 68, 'name_' => 'SANTANDER', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 70, 'name_' => 'SUCRE', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 73, 'name_' => 'TOLIMA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 76, 'name_' => 'VALLE DEL CAUCA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 81, 'name_' => 'ARAUCA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 85, 'name_' => 'CASANARE', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 86, 'name_' => 'PUTUMAYO', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 88, 'name_' => 'SAN ANDRES', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 91, 'name_' => 'AMAZONAS', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 94, 'name_' => 'GUAINIA', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 95, 'name_' => 'GUAVIARE', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 97, 'name_' => 'VAUPES', 'country_id' => '170', 'status_id' => 1]);
        DB::table('state')->insert(['id' => 99, 'name_' => 'VICHADA', 'country_id' => '170', 'status_id' => 1]);
    }
}
