<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarea_id',
        'nombre',
        'descripcion',
        'imagen',
        'fecha_entrega',
        'estatus',
    ];
}
