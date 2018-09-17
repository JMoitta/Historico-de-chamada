<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $fillable = [
    	'numero_de_origem', 'numero_de_destino', 'tempo_da_ligacao', 'data_e_hora_da_ligacao', 'comentario',
    ];
}
