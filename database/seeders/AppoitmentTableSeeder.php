<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Database\Seeders\DatabaseSeeder;

class AppoitmentTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 200; $i++) {
            Appointment::create([
                'client_id' => mt_rand(1, 200),
                'date' => $this->faker->date('Y-m-d', 'now'),
                'time' => $this->faker->time('H:i', 'now'),
                'body' => $this->faker->paragraph,
                'status' => mt_rand(0, 1)
            ]);
        }
    }
}
