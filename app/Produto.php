<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillabe = [
        'nome', 'descricao', 'valor'
    ];
}
