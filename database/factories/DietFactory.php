<?php

namespace Database\Factories;

use App\Models\Diet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DietFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween('100','900'),
            'desc' => $this->faker->text('50'),
        ];
    }
}
