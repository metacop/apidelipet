<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;

    protected $table = 'Raza';
    protected $primaryKey = 'idRaza';

    protected $fillable = [
        'Nombre',
        'Peso_F',
        'Peso_M',
        'Tamano_F',
        'Tamano_M',
        'Dato_interesante',
        'Cuidado',
        'Ruta_imagen'
    ];
}
