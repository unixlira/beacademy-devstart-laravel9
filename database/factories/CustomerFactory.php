<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "nickname" => $this->faker->userName(),
            "cpf" => $this->faker->unique()->numerify(),
            "email" => $this->faker->unique()->safeEmail(),
            "phone" => $this->faker->phoneNumber(),
            "birthday" => $this->faker->date(),
            "address" => $this->faker->address(),
            "district" => $this->faker->locale(),
            "city" => $this->faker->city(),
            "state" => $this->faker->country(),
        ];
    }
}
