<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        $id = Student::inRandomOrder()->first()->id;
        return [
            'BookName' => fake()->randomElement($array = array('Computer Networking', 'DevOps', 'Java', 'Spark Ada',
                                                 'Ethical Hacking', 'Penetration Testing', 'Web Application Development')),    
            'student_id' => $id,
        ];
    }
}
