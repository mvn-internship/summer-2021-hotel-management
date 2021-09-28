<?php

namespace Database\Factories;

use App\Models\UserOfRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserOfRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserOfRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber(),
            'check_in' => $this->faker->dateTime($max = 'now', $timezone = null),
            'identity_card' => $this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'room_id' => $this->faker->randomDigitNotNull ,
        ];
    }
}
