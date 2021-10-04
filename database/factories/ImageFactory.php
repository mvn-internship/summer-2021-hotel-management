<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Image'.rand(1,10),
            'location' => $this->faker->imageUrl($width = 640, $height = 480),
            'room_id' => $this->faker->randomDigitNotNull ,
        ];
    }
}
