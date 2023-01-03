<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TraditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tradition')->insert(['name_' => 'Original', 'status_id' => 1]);
        DB::table('tradition')->insert(['name_' => 'Copia', 'status_id' => 1]);
    }
}
