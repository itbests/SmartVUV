<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_type')->insert(['name_' => 'Persona Natural']);
        DB::table('person_type')->insert(['name_' => 'Persona Jurídica']);
    }
}
