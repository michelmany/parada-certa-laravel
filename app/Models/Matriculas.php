<?php

namespace ParadaCerta\Models;

use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    protected $fillable =  [
        'nome',
        'email',
        'teleone',
        'celular',
        'cpf',
        'rg',
        'cidade',
        'curso_id'


    ];
}
