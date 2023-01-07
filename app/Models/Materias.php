<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;

    protected $table ='materias';

    protected $fillable =['Descripcion',
    'Nombre',
    'Creditos',
    'Area_conocimiento',
    'Opciones',
    'estudiantes_id',
    'profesores_id'

    ];



}
