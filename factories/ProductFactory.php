<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ProductName' => $this->faker->word,
            'SupplierID' => $this->faker->numberBetween(1, 5),
            'CategoryID' => $this->faker->numberBetween(1, 3),
            'QuantityPerUnit' => $this->faker->randomNumber(),
            'UnitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'UnitsInStock' => $this->faker->numberBetween(0, 100),
            'UnitsOnOrder' => $this->faker->numberBetween(0, 50),
            'ReorderLevel' => $this->faker->numberBetween(0, 20),
            'Discontinued' => $this->faker->boolean,
        ];
    }
}