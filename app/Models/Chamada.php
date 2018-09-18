<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chamada extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'numero_de_origem', 'numero_de_destino', 'tempo_da_ligacao', 'data_e_hora_da_ligacao', 'comentario',
    ];
    
    protected $dates = ['deleted_at'];
}
