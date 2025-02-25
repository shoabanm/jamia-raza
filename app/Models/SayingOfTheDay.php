<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SayingOfTheDay extends Model
{
    use HasFactory;
    protected $table = "saying_of_the_day";
    protected $fillable = ['content', 'reference', 'display_date'];

}
