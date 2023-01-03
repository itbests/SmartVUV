<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('module')->insert(['name_' => 'General', 'status_id' => 1]);
        DB::table('module')->insert(['name_' => 'Solicitudes', 'status_id' => 1]);
        DB::table('module')->insert(['name_' => 'Órdenes', 'status_id' => 1]);
        DB::table('module')->insert(['name_' => 'Atención al Cliente', 'status_id' => 1]);
        DB::table('module')->insert(['name_' => 'Notificaciones', 'status_id' => 1]);
        DB::table('module')->insert(['name_' => 'Impresión', 'status_id' => 1]);
    }
}
