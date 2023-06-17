<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CompanyName' => $this->faker->company,
            'ContactName' => $this->faker->name,
            'ContactTitle' => $this->faker->jobTitle,
            'Address' => $this->faker->streetAddress,
            'City' => $this->faker->city,
            'Region' => $this->faker->state,
            'PostalCode' => $this->faker->postcode,
        ];
    }
}