<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::create([
            'phone_number' => '1234567890',
            'whatsapp_number' => '1234567890',
            'email' => 'info@example.com',
            'facebook_link' => 'https://facebook.com',
            'twitter_link' => 'https://twitter.com',
            'tiktok_link' => 'https://tiktok.com',
            'instagram_link' => 'https://instagram.com',
            'map_link' => 'https://maps.google.com',
            'address' => '123 Main St',
            'youtube_link' => 'https://youtube.com',
            'twitch_link' => 'https://twitch.tv',
        ]);
    }
}
