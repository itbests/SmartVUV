<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageTypeClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_type_class')->insert(['name_' => 'Aplication', 'status_id' => 1]);
        DB::table('package_type_class')->insert(['name_' => 'ChatBot', 'status_id' => 1]);
    }
}
