<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabcomputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Labcomputer;
        $a->PC_NO = 76;
        $a->Operating_System = "Windows";
        $a->student_id = 1;

        $a = new Labcomputer;
        $a->PC_NO = 49;
        $a->Operating_System = "Linux";
        $a->student_id = 2;
    }
}
