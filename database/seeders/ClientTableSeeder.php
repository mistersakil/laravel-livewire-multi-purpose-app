<?php

namespace Database\Seeders;

use App\Models\Client;
use Database\Seeders\DatabaseSeeder;

class ClientTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 200; $i++) {
            Client::create([
                'name' => $this->faker->name(),
                'mobile' => '017' . $this->faker->biasedNumberBetween(10000000, 99999999),
                'status' => mt_rand(0, 1)
            ]);
        }
    }
}
