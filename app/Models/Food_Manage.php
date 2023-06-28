<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Manage extends Model
{
    use HasFactory;

    protected $table = 'food_manages';

    protected $fillable = [
        'Food_name',
        'Available_Food',
        'price',
    ];
}
