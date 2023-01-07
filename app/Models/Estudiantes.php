<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $guarded = [
        'Documento',
        'Nombre',
        'Apellido',
        'Email',
        'Telefono',
        'Direccion',
        'Ciudad',
        'Semestre',
        'profesores_id'

        
    ];
}
