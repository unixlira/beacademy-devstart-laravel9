<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "customer_id" => Customer::all()->random()->id,
            "device" => $this->faker->word(),
            "brand" => $this->faker->company(),
            "model" => $this->faker->colorName(),
            "serial_number" => $this->faker->numerify(),
            "accessories" => $this->faker->word(),
            "reported_problem" => $this->faker->text(),
            "service_description" => $this->faker->text(),
            "observations" => $this->faker->text(),
            "status" => $this->faker->randomLetter(),
            "price" => $this->faker->latitude(),
            "active" => true,
        ];
    }
}
