<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Book;
use App\Models\Computerlab;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(StudentTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(ComputerlabSeeder::class);

        
        $student = Student::factory()
                            ->has(Book::factory()->count(3))
                            ->create();


        

    }
}
