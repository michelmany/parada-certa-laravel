<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;
use ParadaCerta\Models\Matricula;

class MatriculasController extends Controller
{

    public function __construct(Matricula $matricula)
    {
        $this->matricula = $matricula;
    }

    public function index()
    {
        $matriculas = $this->matricula->all();

        return view('painel.matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        return view('painel.matriculas.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
