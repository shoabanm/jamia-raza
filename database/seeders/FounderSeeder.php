<?php

namespace Database\Seeders;

use App\Models\Founder;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserting the three founders
        Founder::create([
            'name' => 'Imam Ahmad Raza Khan Barelvi',
            'designation' => 'Bani',
            'picture' => 'uploads/founders/ahmad_raza_khan.jpg', // Use the relative path to the stored picture
        ]);

        Founder::create([
            'name' => 'Sheikh ul Islam Dr Tahir Ul Qadri',
            'designation' => 'Bani',
            'picture' => 'uploads/founders/tahir_qadri.jpg', // Use the relative path to the stored picture
        ]);

        Founder::create([
            'name' => 'Allam Dr Ashraf Asif Jalai',
            'designation' => 'Bani',
            'picture' => 'uploads/founders/ashraf_asif.jpg', // Use the relative path to the stored picture
        ]);
    }
}
