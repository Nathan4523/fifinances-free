<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table = 'tb_conta';
    protected $fillable = [
        'codigo_user_conta_simples', 'nome', 'data', 'valor', 'categoria', 'pagamento'
    ];
}
