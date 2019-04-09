<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annotations extends Model
{
    protected $table = 'tb_anotacoes';
    protected $fillable = [
        'codigo_user_notas', 'titulo', 'dia', 'descricao'
    ];
}