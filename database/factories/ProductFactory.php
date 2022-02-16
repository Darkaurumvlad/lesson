<?php

namespace Database\Factories;

use App\Models\Culture;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'norm_azot' => $this->faker->randomFloat(2, 20, 180),
            'norm_fosfor' => $this->faker->randomFloat(2, 20, 150),
            'norm_kaliy' => $this->faker->randomFloat(2, 20, 120),
            'culture_id' => Culture::get()->random()->id,
            'district' => $this->faker->sentence(2),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'description' => $this->faker->realText(50),
            'function' => $this->faker->sentence(7),
            'created_at' => $created = $this->faker->dateTimeBetween('-30 days', '1 days'),
            'updated_at' => $created
        ];
    }
}
