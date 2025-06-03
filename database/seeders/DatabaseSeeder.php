<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(FounderSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(GeneralSettingsSeeder::class);

        // Call the Users Seeder
        $this->call(UsersTableSeeder::class);
        // $this->call([
        //     AllModelFactorySeeder::class,
        // ]);
        
    }
}
