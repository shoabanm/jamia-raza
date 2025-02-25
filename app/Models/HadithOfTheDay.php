<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HadithOfTheDay extends Model
{
    use HasFactory;
    protected $table = "hadith_of_the_day";
    protected $fillable = ['content', 'reference', 'display_date'];

}
