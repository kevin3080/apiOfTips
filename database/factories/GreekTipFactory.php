<?php

namespace Database\Factories;

use App\Models\GreekTip;
use Illuminate\Database\Eloquent\Factories\Factory;

class GreekTipFactory extends Factory
{
    protected $model = GreekTip::class;


    public function definition(): array
    {
    	return [
    		'origin_of_proverb' => 'Greek',
    		'proverb' => $this->faker->sentence(7),
    		'description_proverb' => $this->faker->paragraph(2),
    	];
    }
}
