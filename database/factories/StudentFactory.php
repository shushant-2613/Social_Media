<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(),
            'Roll_No' => fake()->unique()->numberBetween(1,20),
            'Course' => fake()->randomElement($array = array('MSc in Cyber Security', 'Doctor of Pharmacy', 'Business Analytics', 'Management', 'Advance Computer Science')),
        ];
    }
}
