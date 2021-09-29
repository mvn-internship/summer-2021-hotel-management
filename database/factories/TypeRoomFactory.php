<?php

namespace Database\Factories;

use App\Models\TypeRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'limit_persons' => rand(1,4),
        ];
    }
}
