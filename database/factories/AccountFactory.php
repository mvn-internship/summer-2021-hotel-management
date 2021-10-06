<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'name'  => $this->faker->name(),
            'avatar' => $this->faker->imageUrl($width = 640, $height = 480),
            'password' => bcrypt(Str::random(10)), // password
            'role' => rand(0,3),
            'remember_token' => Str::random(10),
        ];
    }
}
