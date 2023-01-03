<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identification_type')->insert(['document_type' => 'RC', 'name_' => 'Registro Civil']);
        DB::table('identification_type')->insert(['document_type' => 'TC', 'name_' => 'Tarjeta de Identidad']);
        DB::table('identification_type')->insert(['document_type' => 'CC', 'name_' => 'Cédula de Ciudadanía']);
        DB::table('identification_type')->insert(['document_type' => 'CE', 'name_' => 'Cédula de Extranjería']);
        DB::table('identification_type')->insert(['document_type' => 'PA', 'name_' => 'Pasaporte']);
        DB::table('identification_type')->insert(['document_type' => 'RUT', 'name_' => 'Registro Único Tributario']);
        DB::table('identification_type')->insert(['document_type' => 'NIT', 'name_' => 'Número de Identificación Tributaria']);
        DB::table('identification_type')->insert(['document_type' => 'NIUP', 'name_' => 'Número Único de Identificación Personal']);
    }
}
