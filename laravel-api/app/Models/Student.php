<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // add the 'name' attribute to the $fillable array
        'city',
        'fees',
        // ... other fillable attributes
    ];
}
