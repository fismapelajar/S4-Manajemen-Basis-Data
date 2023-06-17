<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'OrderID' => $this->faker->numberBetween(1, 5),
            'ProductID' => $this->faker->numberBetween(1, 10),
            'UnitPrice' => $this->faker->randomFloat(2, 0, 100),
            'Quantity' => $this->faker->numberBetween(1, 10),
            'Discount' => $this->faker->randomFloat(2, 0, 0.5),
        ];
    }
}