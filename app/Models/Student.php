<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student'; // Nombre de la tabla en la base de datos
    protected $fillable = [ // Campos que pueden ser alterados masivamente
        'name', // Nombre del estudiante
        'email', // Correo electrónico del estudiante
        'phone', // Teléfono del estudiante
        'birth_date', // Fecha de nacimiento del estudiante
    ];
}
