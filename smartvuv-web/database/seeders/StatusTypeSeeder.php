<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_type')->insert(['name_' => 'General']);
        DB::table('status_type')->insert(['name_' => 'Solicitudes']);
        DB::table('status_type')->insert(['name_' => 'Órdenes']);
    }
}
