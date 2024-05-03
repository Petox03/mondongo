<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class movie extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name',
        'genre',
        'duration',
        'director',
        'synopsis',
        'reviews'
    ];
    use HasFactory;
}
