<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Student;
        $a->Name = "Shushant";
        $a->Roll_No = 13;
        $a->Course = "MSC in cyber security";

        $b = new Student;
        $b->Name = "Gaurav";
        $b->Roll_No = 26;
        $b->Course = "Doctor of Pharamcy";
    }
}
