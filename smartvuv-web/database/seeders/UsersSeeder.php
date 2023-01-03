<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'IT Bests SAS',
            'email' => 'support@itbests.com',
            'password' => '$2y$10$hrmg/.QrjUMo6VDsNbqIxe1q32AUuixi6rRRdVQzG7HpMRj5WLsAy',
            'created_at' => '2021-09-12 19:37:25',
            'updated_at' => '2021-09-12 19:37:25',
        ]);
    }
}
