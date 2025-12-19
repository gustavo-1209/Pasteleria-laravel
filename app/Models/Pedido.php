<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'tipo_torta',
        'porciones',
        'decoracion',
        'cliente',
        'telefono',
        'fecha_entrega',
        'estado'
    ];
}
