<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CustomerID' => $this->faker->numberBetween(1, 5),
            'EmployeeID' => $this->faker->numberBetween(1, 5),
            'OrderDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'RequiredDate' => $this->faker->dateTimeBetween('now', '+1 year'),
            'ShippedDate' => $this->faker->dateTimeBetween('now', '+1 year'),
            'ShipVia' => $this->faker->numberBetween(1, 2),
            'Freight' => $this->faker->randomFloat(2, 0, 100),
            'ShipName' => $this->faker->company,
            'ShipAddress' => $this->faker->streetAddress,
            'ShipCity' => $this->faker->city,
            'ShipRegion' => $this->faker->state,
            'ShipPostalCode' => $this->faker->postcode,
            'ShipCountry' => $this->faker->country,
        ];
    }
}