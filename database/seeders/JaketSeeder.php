<?php

namespace Database\Seeders;

use App\Models\Jaket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jaket::factory()->count(4)->create();
    }
}
