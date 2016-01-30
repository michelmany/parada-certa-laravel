<?php

namespace ParadaCerta\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable =  [
        'nome',
        'email',
        'telefone',
        'celular',
        'cpf',
        'rg',
        'emissor',
        'data_nasc',
        'nome_mae',
        'nome_pai',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'como_conheceu',
    ];

    public function cursos()
    {
        return $this->belongsToMany('ParadaCerta\Models\Curso', 'matriculas_cursos');
    }
}
