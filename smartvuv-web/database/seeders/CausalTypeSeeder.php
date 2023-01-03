<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CausalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('causal_type')->insert(['name_' => 'Éxito']);
        DB::table('causal_type')->insert(['name_' => 'Fallo']);
        DB::table('causal_type')->insert(['name_' => 'Comentario']);
    }
}
