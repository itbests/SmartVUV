<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            'person_type_id' => 1,
            'first_name' => 'IT Bests S.A.S.',
            'last_name' => 'Lo mejor en soluciones de TI',
            'identification_type_id' => 7,
            'identification' => '901622185-1',
            'user_id' => 1,
            'address' => 'CL 11 CR 48 A-56',
            'zip_code' => '760001',
            'phone1' => '3188728340',
            'phone2' => '6023952401',
            'email' => 'info@itbests.com',
            'website' => 'https://itbests.com',
            'comments' => 'Información personal Super-Usuario del sistema',
        ]);
    }
}
