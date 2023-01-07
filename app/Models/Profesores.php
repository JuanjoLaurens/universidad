<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    use HasFactory;

    protected $table ='profesores';

    protected $guarded = [
        'Documento' ,
        'Nombre' ,
        'Apellido' ,
        'Email',
        'Telefono',
        'Direccion' ,
        'Ciudad'
    ];
    
}

