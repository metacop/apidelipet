<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{

    use HasFactory;

    protected $table = 'notificacion';
    protected $primaryKey = 'idNotificacion';

    protected $fillable = [
        'texto',
        'fecha',
        'estado'
    ];

}
