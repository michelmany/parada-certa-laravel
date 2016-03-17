<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;
use ParadaCerta\Models\Curso;
use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class CursosController extends Controller
{

    public function __construct(Curso $curso)
    {
        $this->curso = $curso;
    }

    public function index()
    {
        $cursos = $this->curso->all();

        return view('painel.cursos.index', compact('cursos'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->curso->create($request->all());

        return redirect()->route('cursos');
    }

    public function destroy($id)
    {
        $this->curso->find($id)->delete();
        return redirect()->route('cursos');
    }
}
