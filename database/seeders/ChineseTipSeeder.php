<?php

namespace Database\Seeders;

use App\Models\ChineseTip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChineseTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChineseTip::factory()->count(200)->create();
    }
}
