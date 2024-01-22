<?php

namespace Database\Seeders;

use App\Models\Sepatu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sepatu::factory()->count(4)->create();
    }
}
