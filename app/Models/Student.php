<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'dob',
        'address',
        'department_id', // Foreign key for department
        'picture',
        'description',
        'enrolled',
        'passed_out',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
}
