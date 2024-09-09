<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\version1\ContinentTableSeeder;
use Database\Seeders\version1\RoleTableSeeder;
use Database\Seeders\version1\VisaTypeSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ContinentTableSeeder::class,
            RoleTableSeeder::class,
            // VisaTypeSeeder::class
        ]);
    }
}
