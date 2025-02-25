<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PictureGallery extends Model
{
    use HasFactory;
    protected $table = "picture_galleries";
    protected $fillable = ['title', 'picture'];
}
