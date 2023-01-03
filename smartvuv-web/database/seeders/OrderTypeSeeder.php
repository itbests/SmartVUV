<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_type')->insert(['name_' => 'Inicial', 'status_id' => 1]);
        DB::table('order_type')->insert(['name_' => 'Tramite', 'status_id' => 1]);
        DB::table('order_type')->insert(['name_' => 'Notificación', 'status_id' => 1]);
        DB::table('order_type')->insert(['name_' => 'Cierre', 'status_id' => 1]);
        DB::table('order_type')->insert(['name_' => 'Única', 'status_id' => 1]);
    }
}
