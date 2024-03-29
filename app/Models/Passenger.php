<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = "passenger";
    protected $primaryKey = 'Passenger_id';
    protected $fillable = [
        'Passenger_name',
        'Password',
        'email',
        'gender',
        'Address',
        'image'
    ];
}
