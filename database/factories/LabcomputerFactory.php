<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Labcomputer>
 */
class LabcomputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {    $id = Student::inRandomOrder()->first()->id;
        return [
            'PC_NO' => fake()->unique(true)->numberBetween(1, 99),
            'Operating_System' => fake()->randomElement($array = array('Windows', 'Linux')),
            'student_id' => $id,
        ];
    }
}
