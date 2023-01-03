<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support_type')->insert(['name_' => 'Papel', 'status_id' => 1]);
        DB::table('support_type')->insert(['name_' => 'Electrónico', 'status_id' => 1]);
        DB::table('support_type')->insert(['name_' => 'Medio Tecnológico', 'status_id' => 1]);
        DB::table('support_type')->insert(['name_' => 'Correo Electrónico', 'status_id' => 1]);
        DB::table('support_type')->insert(['name_' => 'Papel / Electrónico', 'status_id' => 1]);
    }
}
