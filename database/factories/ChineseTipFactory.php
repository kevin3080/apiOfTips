<?php

namespace Database\Factories;

use App\Models\ChineseTip;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChineseTipFactory extends Factory
{
    protected $model = ChineseTip::class;

    public function definition(): array
    {
    	return [
    	    'origin_of_proverb' => 'Chinese',
    		'proverb' => $this->faker->sentence(7),
    		'description_proverb' => $this->faker->paragraph(2),
    	];
    }
}
