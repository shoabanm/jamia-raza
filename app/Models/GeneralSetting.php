<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_number',
        'whatsapp_number',
        'email',
        'address',
        'facebook_link',
        'twitter_link',
        'tiktok_link',
        'instagram_link',
        'map_link',
        'youtube_link',
        'twitch_link'
    ];
}
