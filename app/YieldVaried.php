<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YieldVaried extends Model
{
    protected $table = 'tb_rendimento_var';
    protected $fillable = [
        'code_user', 'nome', 'valor', 'data'
    ];
}
