<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->swiftBicNumber(),
            'date_start' => $this->faker->dateTime($max = 'now', $timezone = null),
            'date_end' => $this->faker->dateTime($max = 'now', $timezone = null),
            'limit_confirm' => rand(1,4),
            'quantity' => $this->faker->randomDigitNotNull,
            'reserve' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'status' => rand(0,1),
            'type_room_id' => $this->faker->randomDigitNotNull,
            'user_id' => $this->faker->randomDigitNotNull ,
        ];
    }
}
