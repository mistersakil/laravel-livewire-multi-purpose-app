<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $faker;
    public function __construct(Generator $faker)
    {
        $this->faker = $faker;
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for ($i = 0; $i < 1000; $i++) {
            Product::create([
                'name' => $this->faker->name(),
                'price' => $this->faker->biasedNumberBetween(1000, 9000),
                'quantity' => $this->faker->biasedNumberBetween(100, 200),
                'status' => 1
            ]);
        }
    }
}