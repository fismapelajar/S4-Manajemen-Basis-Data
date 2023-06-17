<?php

namespace Database\Factories;

use App\Models\Shipper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipper>
 */
class ShipperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipper::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CompanyName' => $this->faker->company,
            'Phone' => $this->faker->phoneNumber,
        ];
    }
}