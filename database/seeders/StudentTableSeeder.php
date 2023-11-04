<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Student::factory()->count(20)->create();

        // $a = new Student;
        // $a->Name = "Shushant";
        // $a->Roll_No = 13;
        // $a->Course = "MSC in cyber security";

        // $b = new Student;
        // $b->Name = "Gaurav";
        // $b->Roll_No = 26;
        // $b->Course = "Doctor of Pharamcy";
    }
}
