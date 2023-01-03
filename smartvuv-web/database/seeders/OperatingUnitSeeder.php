<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OperatingUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach( range(1,30) as $index ) {
            DB::table('operating_unit')->insert([
                'name_' => $faker->catchPhrase,
                'address' => $faker->address,
                'office_id' => $faker->numberBetween(100, 999),
                'phone1' => $faker->e164PhoneNumber,
                'phone2' => $faker->e164PhoneNumber,
                'email' => $faker->unique()->safeEmail,
                'view_line_process' => $faker->randomElement($array = array ('S','N')),
                'autoassigned' => $faker->randomElement($array = array ('S','N')),
                'register_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status_id' => $faker->randomElement($array = array (0, 1)),
            ]);
        }
    }
}
