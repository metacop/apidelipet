<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hogar extends Model
{
    use HasFactory;

    protected $table = 'Hogar';
    protected $primaryKey = 'idHogar';

    protected $fillable = [
        'nombre',
        'ubicacion',
        'id_usuario'
    ];

}
