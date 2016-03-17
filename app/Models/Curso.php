<?php

namespace ParadaCerta\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function matriculas()
    {
        return $this->belongsToMany('ParadaCerta\Models\Matricula', 'matriculas_cursos');
    }
}
