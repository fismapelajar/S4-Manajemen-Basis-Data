<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'LastName' => $this->faker->lastName,
            'FirstName' => $this->faker->firstName,
            'Title' => $this->faker->jobTitle,
            'TitleOfCourtesy' => $this->faker->title,
            'BirthDate' => $this->faker->date(),
            'HireDate' => $this->faker->date(),
            'Address' => $this->faker->streetAddress,
            'City' => $this->faker->city,
            'Region' => $this->faker->state,
        ];
    }
}