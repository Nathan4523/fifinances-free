<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MyAccount extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'id', 'name', 'email', 'password', 'salario', 'banco_1', 'banco_2', 'banco_3'
    ];
}
