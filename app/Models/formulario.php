<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulario extends Model
{
    use HasFactory;
    protected $table = 'formularios';
    protected $fillable = ['nombre', 'apellido', 'edad', 'telefono', 'comentario'];
}
