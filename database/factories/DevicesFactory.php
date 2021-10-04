<?php

namespace Database\Factories;

use App\Models\Devices;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Devices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'price' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'description' => $this->faker->text($maxNbChars = 200),
            'status' => rand(0,5),
            'quantity' => $this->faker->randomDigitNotNull,
        ];
    }
}
