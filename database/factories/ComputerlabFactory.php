<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ComputerlabFactory extends Factory
{
    /**Define the model's default state.
     *@return array<string, mixed*/
    public function definition(): array
    {
        $id = DB::table('students')->select('id')->get();
        $ids = fake()->unique()->randomElement($id)->id; 

        return [
            'PC_NO' => fake()->unique()->numberBetween(1, 99),
            'Operating_System' => fake()->randomElement($array = 
                                                    array('Windows', 'Linux', 
                                                    'DOS-OS', 'Parrot OS', 'Ubuntu', 'Mac-OS')),
            'student_id' => $ids,
        ];
    }
}
