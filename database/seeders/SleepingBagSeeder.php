<?php

namespace Database\Seeders;

use App\Models\SleepingBag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SleepingBagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SleepingBag::factory()->count(4)->create();
    }
}
