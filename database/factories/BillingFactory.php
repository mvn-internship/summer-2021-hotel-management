<?php

namespace Database\Factories;

use App\Models\Billing;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->swiftBicNumber(),
            'total' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'service_id' => $this->faker->randomDigitNotNull,
            'device_id' => $this->faker->randomDigitNotNull,
            'room_id' => $this->faker->randomDigitNotNull,
            'user_id' => $this->faker->randomDigitNotNull ,
        ];
    }
}
