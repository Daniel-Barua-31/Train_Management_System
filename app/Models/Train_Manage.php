<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train_Manage extends Model
{
    use HasFactory;
    protected $table = 'train_manages';

    protected $fillable = [
        'Trains_name',
        'Available_seats',
        'price',
        'Trains_destination',
        'Time',
    ];
}
