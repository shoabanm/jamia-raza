<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Department::create([
                'short_name' => 'CSE',
                'title' => 'Computer Science & Engineering',
                'picture' => 'cse.jpg',
                'description' => 'The department of Computer Science and Engineering offers courses and research opportunities in various fields of computer science.'
            ]);
    
            Department::create([
                'short_name' => 'ECE',
                'title' => 'Electronics & Communication Engineering',
                'picture' => 'ece.jpg',
                'description' => 'The department of Electronics and Communication Engineering focuses on the study of electronic circuits, devices, and communication systems.'
            ]);
        }
    }
}
