<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistres extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'lieu',
        'date',
        'heure',
        'nombre_personne',
        // 'photo',
        'description',
    ];
}
