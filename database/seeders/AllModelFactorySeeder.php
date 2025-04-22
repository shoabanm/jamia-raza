<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class AllModelFactorySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $defaultImage = 'uploads/default.jpg';
    
        // Departments
        for ($i = 0; $i < 10; $i++) {
            DB::table('departments')->insert([
                'short_name' => strtoupper(Str::random(4)),
                'title' => $faker->words(3, true),
                'picture' => $defaultImage,
                'description' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Services
        for ($i = 0; $i < 10; $i++) {
            DB::table('services')->insert([
                'short_name' => $faker->unique()->slug(2),
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'picture' => $defaultImage,
                'show' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Students
        $departmentIds = DB::table('departments')->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'father_name' => $faker->name('male'),
                'dob' => $faker->date(),
                'address' => $faker->address,
                'department_id' => $faker->randomElement($departmentIds),
                'picture' => $defaultImage,
                'description' => $faker->paragraph,
                'enrolled' => $faker->boolean,
                'passed_out' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Ayat of the Day
        for ($i = 0; $i < 10; $i++) {
            DB::table('ayat_of_the_day')->insert([
                'content' => $faker->paragraph,
                'reference' => 'Surah '.$faker->numberBetween(1, 114),
                'display_date' => $faker->date(),
                'approved' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Hadith of the Day
        for ($i = 0; $i < 10; $i++) {
            DB::table('hadith_of_the_day')->insert([
                'content' => $faker->paragraph,
                'reference' => 'Bukhari '.$faker->numberBetween(1, 1000),
                'display_date' => $faker->date(),
                'approved' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Saying of the Day
        for ($i = 0; $i < 10; $i++) {
            DB::table('saying_of_the_day')->insert([
                'content' => $faker->sentence(10),
                'reference' => 'Scholar '.$faker->name,
                'display_date' => $faker->date(),
                'approved' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Picture Gallery
        for ($i = 0; $i < 10; $i++) {
            DB::table('picture_galleries')->insert([
                'title' => $faker->sentence(3),
                'picture' => $defaultImage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // News
        for ($i = 0; $i < 10; $i++) {
            DB::table('news')->insert([
                'title' => $faker->sentence(5),
                'youtube_link' => 'https://youtube.com/watch?v=' . Str::random(10),
                'short_description' => $faker->paragraph,
                'image' => $defaultImage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Events
        for ($i = 0; $i < 10; $i++) {
            DB::table('events')->insert([
                'title' => $faker->sentence(3),
                'event_date' => $faker->date(),
                'description' => $faker->paragraph,
                'pictures' => json_encode($defaultImage),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    
        // Books
        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'book_name' => $faker->sentence(2),
                'author_name' => $faker->name,
                'pages' => $faker->numberBetween(100, 500),
                'description' => $faker->paragraph,
                'picture' => $defaultImage,
                'external_link' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Sub Campuses
        for ($i = 0; $i < 10; $i++) {
            DB::table('sub_campuses')->insert([
                'campus_name' => 'Campus ' . $faker->city,
                'description' => $faker->paragraph,
                'enrolled_students' => $faker->numberBetween(50, 500),
                'teachers' => $faker->numberBetween(5, 50),
                'principal_in_charge' => $faker->name,
                'principal_picture' => $defaultImage,
                'campus_picture' => $defaultImage,
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        // Teachers
        for ($i = 0; $i < 10; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'education_details' => $faker->sentence(6),
                'age' => $faker->numberBetween(25, 60),
                'designation' => $faker->jobTitle,
                'picture' => $defaultImage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    
}
