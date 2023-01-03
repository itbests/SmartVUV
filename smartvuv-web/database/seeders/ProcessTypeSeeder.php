<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('process_type')->insert(['name_' => 'PQRS', 'status_id' => 1]);
        DB::table('process_type')->insert(['name_' => 'Correspondencia Recibida', 'status_id' => 1]);
        DB::table('process_type')->insert(['name_' => 'Correspondencia Enviada', 'status_id' => 1]);
    }
}
