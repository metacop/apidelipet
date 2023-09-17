<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispensador extends Model
{
    use HasFactory;

    protected $table = 'dispensador';
    protected $primaryKey = 'idDispensador';

    protected $fillable = [
         'IP',
        'MacAddress',
        'nombre',
        'nivel_fuente_agua',
        'nivel_fuente_comida',
        'nivel_dep_agua',
        'nivel_dep_comida'
    ];

}
