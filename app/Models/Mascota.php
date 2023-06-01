<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'Mascota';
    protected $primaryKey = 'idMascota';

    protected $fillable = [
        'nombre',
        'sexo',
        'altura',
        'peso',
        'fecha_nacimiento',
        'imagen_mascota',
        'users_id'
    ];

}
