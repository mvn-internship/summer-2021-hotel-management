<?php

namespace Database\Factories;

use App\Models\DevicesOfRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevicesOfRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DevicesOfRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_id' => $this->faker->randomDigitNotNull,
            'room_id' => $this->faker->randomDigitNotNull ,
            'status' => rand(0,5),
        ];
    }
}
