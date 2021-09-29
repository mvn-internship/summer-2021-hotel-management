<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber(),
            'gender' => rand(0,1),
            'age' => $this->faker->randomDigitNotNull,
            'national' => $this->faker->country(),
            'account_id' => $this->faker->randomDigitNotNull ,
        ];
    }
}
