<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'agreement_date' => $this->faker->dateTimeBetween('-30 days', '-10 days'),
            'delivery_cost' => $this->faker->randomFloat(2, 10, 500),
            'region' => $this->faker->country(),
        ];
    }
}
