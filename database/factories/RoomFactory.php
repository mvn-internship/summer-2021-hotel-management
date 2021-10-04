<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'description' => $this->faker->text($maxNbChars = 200),
            'status' => rand(0,5),
            'type_id' => $this->faker->randomDigitNotNull ,
        ];
    }
}
