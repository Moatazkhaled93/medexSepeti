<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerFileName = $this->faker->image(public_path('images/products'), 300, 300);
        return [
            'customer_id' => Customer::all()->random()->id,
            'image' => 'images/products' . basename($fakerFileName),
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'total_views' => $this->faker->randomNumber(),

        ];
    }
}
