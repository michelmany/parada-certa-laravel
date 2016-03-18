<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Support\Facades\Auth;
use ParadaCerta\Models\Matricula;
use Illuminate\Http\Request;
use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

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
        $cursos = \DB::table('cursos')->get(); #Busca todos os cursos no banco.
        return view('painel.matriculas.create', compact('cursos'));
    }

    public function store(Requests\MatriculaRequest $request)
    {
        //dd($request->all());
        $this->request = $request->curso_id;
        $store = $this->matricula->create($request->all());
        $store->cursos()->sync($this->request);

        if(Auth::user()):
            return redirect()->route('matriculas');
        else:
            \Session::flash('flash_message','Sua solicitação de Matrícula foi efetuada com sucesso. Favor aguardar nosso contato!');
            return redirect()->route('matricula.online');
        endif;
    }

    public function view($id)
    {
        $matricula = $this->matricula->find($id);
        $cursos = \DB::table('cursos')->get(); #Busca todos os cursos no banco.
        $selectedCursos = \DB::table('matriculas_cursos')->where('matricula_id', $id)->lists('curso_id','curso_id');

        return view('painel.matriculas.view', compact('matricula', 'cursos', 'selectedCursos'));
    }

    public function edit($id)
    {
        $matricula = $this->matricula->find($id);
        $cursos = \DB::table('cursos')->get(); #Busca todos os cursos no banco.
        $selectedCursos = \DB::table('matriculas_cursos')->where('matricula_id', $id)->lists('curso_id','curso_id');


        return view('painel.matriculas.edit', compact('matricula', 'cursos', 'selectedCursos'));
    }

    public function update($id, Requests\MatriculaRequest $request)
    {

        $this->matricula->find($id)->update($request->all());
        $update = $this->matricula->find($id);
        $update->cursos()->sync($request->curso_id);

        return redirect()->route('matriculas');
    }

    public function destroy($id)
    {
        $this->matricula->find($id)->delete();
        return redirect()->route('matriculas');
    }

}
