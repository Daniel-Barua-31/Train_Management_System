<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $table = 'station';

    protected $fillable = [
        'Stations_name',
        'City',
        'pricing'
    ];

}