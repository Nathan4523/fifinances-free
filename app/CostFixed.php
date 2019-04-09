<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostFixed extends Model
{
    protected $table = 'tb_conta_fixa';
    protected $fillable = [
        'codigo_usuario', 'nome', 'data', 'valor', 'categoria'
    ];
}
