<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCampus extends Model
{
    use HasFactory;

    protected $fillable = [
        'campus_name', 'description', 'enrolled_students', 'teachers',
        'principal_in_charge', 'principal_picture', 'campus_picture', 'address'
    ];
}
