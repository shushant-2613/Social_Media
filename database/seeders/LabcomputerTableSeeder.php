<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Labcomputer;


class LabcomputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Labcomputer::factory()->count(20)->create();
        
        
        // $a = new Labcomputer;
        // $a->PC_NO = 76;
        // $a->Operating_System = "Windows";
        // $a->student_id = 1;

        // $b = new Labcomputer;
        // $b->PC_NO = 49;
        // $b->Operating_System = "Linux";
        // $b->student_id = 2;
    }
}
