<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(['id' => 0, 'name_' => 'Inactivo', 'status_type_id' => 1]);
        DB::table('status')->insert(['name_' => 'Activo', 'status_type_id' => 1]);
        DB::table('status')->insert(['name_' => 'Registrada', 'status_type_id' => 2]);
        DB::table('status')->insert(['name_' => 'En proceso', 'status_type_id' => 2]);
        DB::table('status')->insert(['name_' => 'Anulada', 'status_type_id' => 2]);
        DB::table('status')->insert(['name_' => 'Registrada', 'status_type_id' => 3]);
        DB::table('status')->insert(['name_' => 'Asignada', 'status_type_id' => 3]);
        DB::table('status')->insert(['name_' => 'Atendida', 'status_type_id' => 3]);
        DB::table('status')->insert(['name_' => 'Cancelada', 'status_type_id' => 3]);
    }
}
