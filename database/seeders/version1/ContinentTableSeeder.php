<?php

namespace Database\Seeders\version1;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('continents')->truncate();


        DB::table('continents')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => "Africa",
                    'status' => true,
                    'created_at' => '2024-03-27 03:04:00',
                    'updated_at' => '2024-03-27 03:04:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => "North America",
                    'status' => true,
                    'created_at' => '2024-03-27 03:04:00',
                    'updated_at' => '2024-03-27 03:04:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => "South America",
                    'status' => true,
                    'created_at' => '2024-03-27 03:04:00',
                    'updated_at' => '2024-03-27 03:04:00',
                ),
            3=>
                array(
                    'id' => 4,
                    'name' => "Europe",
                    'status' => true,
                    'created_at' => '2024-03-27 03:04:00',
                    'updated_at' => '2024-03-27 03:04:00',
                ),
            4=>
                array(
                    'id' => 5,
                    'name' => "Asia",
                    'status' => true,
                    'created_at' => '2024-03-27 03:04:00',
                    'updated_at' => '2024-03-27 03:04:00',
                ),
            5=>
                array(
                    'id' => 6,
                    'name' => "Australia",
                    'status' => true,
                    'created_at' => '2024-03-27 03:04:00',
                    'updated_at' => '2024-03-27 03:04:00',
                ),
           
            ));

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
