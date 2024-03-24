<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;
    protected $table = 'invitados'; // Nombre de la tabla en la base de datos
    protected $fillable = [
        'Nombre', 
        'Boletos'
    ];
}
