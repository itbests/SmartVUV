<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provision')->insert(['name_' => 'No aplica', 'status_id' => 1]);
        DB::table('provision')->insert(['name_' => 'Medio Tecnológico', 'status_id' => 1]);
        DB::table('provision')->insert(['name_' => 'Eliminación', 'status_id' => 1]);
        DB::table('provision')->insert(['name_' => 'Selección', 'status_id' => 1]);
        DB::table('provision')->insert(['name_' => 'Conservación Total', 'status_id' => 1]);
        DB::table('provision')->insert(['name_' => 'C. Total / M. Tecnológico', 'status_id' => 1]);
        DB::table('provision')->insert(['name_' => 'M. Tecnológico / Selección', 'status_id' => 1]);
    }
}
