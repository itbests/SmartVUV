<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Perfil SuperAdministrador
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 0,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 1,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 2,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 3,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 4,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 5,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 6,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 7,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 8,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 9,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 10,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 11,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 12,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 13,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 14,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 15,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 16,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 17,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 18,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 19,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 20,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 21,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 22,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 23,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 24,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 25,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '1', 'menu_id' => 26,  'status_id' => 1]);
        //Perfil de usuario general
        DB::table('profile_menu')->insert(['profile_id' => '2', 'menu_id' => 0,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '2', 'menu_id' => 13,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '2', 'menu_id' => 14,  'status_id' => 1]);
        DB::table('profile_menu')->insert(['profile_id' => '2', 'menu_id' => 15,  'status_id' => 1]);
    }
}
