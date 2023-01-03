<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\factories\OperatingUnitFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusTypeSeeder::class,
            StatusSeeder::class,
            PackageTypeClassSeeder::class,
            ProcessTypeSeeder::class,
            PackageTypeSeeder::class,
            CausalTypeSeeder::class,
            ModuleSeeder::class,
            PersonTypeSeeder::class,
            IdentificationTypeSeeder::class,
            OrderTypeSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            UsersSeeder::class,
            PersonSeeder::class,
            ProfileSeeder::class,
            UserProfileSeeder::class,
            MenuTypeSeeder::class,
            MenuSeeder::class,
            ProfileMenuSeeder::class,
            InsMessage::class,
            InsParameter::class,
            ProvisionSeeder::class,
            SupportTypeSeeder::class,
            TraditionSeeder::class,
            DocumentsTypeSeeder::class,
            SerieSeeder::class,
            SubseriesSeeder::class,
            OperatingUnitSeeder::class,
        ]);
    }
}
