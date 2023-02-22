<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    use HasFactory;
    protected $table = 'parceiros';
    protected $fillable = [
        'nome',
        'email',
        'phone',
    ];
}
