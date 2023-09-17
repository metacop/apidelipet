<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascota';
    protected $primaryKey = 'idMascota';

    protected $fillable = [
        'nombre',
        'sexo',
        'peso',
        'imagen_mascota'
        'users_id'
    ];

}
