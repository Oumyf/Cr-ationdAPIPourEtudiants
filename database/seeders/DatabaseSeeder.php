<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UESeeder::class,
            EtudiantSeeder::class,
            MatiereSeeder::class,
            UserSeeder::class,

        ]);
    }
}
