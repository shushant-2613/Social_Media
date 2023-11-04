<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Book;
        $a->BookName = "Ada Book";
        $a->student_id = 1;


        $b = new Book;
        $b->BookName = "Web Development Book";
        $b->student_id = 2;
    }
}