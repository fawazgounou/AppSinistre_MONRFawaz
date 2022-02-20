<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistré extends Model
{
    use HasFactory;
    protected $fillable = [
        'age',
        'profession',
        'nom',
        'prénom',
        'protection_choisis',
        // 'photo',
    ];
}


