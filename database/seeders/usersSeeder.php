<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            \DB::table("users")->insert(
                array(
                    'name'     => $faker->firstName,
                    'lastname'  => $faker->lastName,
                    'age' => $faker->numberBetween(18, 70),
                    'id_role' => $faker->numberBetween(1, 3),
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                )
            );
        }
    }
}
