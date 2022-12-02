<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('fotos');
        Storage::makeDirectory('fotos');

        $this->call([
            //CampusSeeder::class,
            //CareerSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            StateSeeder::class,
            MunicipalitySeeder::class
        ]);
    }
}
