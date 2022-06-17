<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\DatabaseSeeder;

class UserTableSeeder extends DatabaseSeeder
{
    /**
     * Run user table seeder
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 200; $i++) {
            User::create([
                'name' => $this->faker->name(),
                'email' => $this->faker->email(),
                'password' => bcrypt(123456),
                'mobile' => '017' . $this->faker->biasedNumberBetween(100000000, 999999999),
                'status' => mt_rand(0, 1)
            ]);
        }
    }
}
