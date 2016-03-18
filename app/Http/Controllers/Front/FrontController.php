<?php

namespace ParadaCerta\Http\Controllers\Front;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $teste = 'Página Principal';
        return view('front.index', ['title'=>$teste]);
    }

    public function contato()
    {
        return view('front.contato');
    }

    public function simulado()
    {
        return view('front.simulado-online');
    }

    public function quemsomos()
    {
        return view('front.quemsomos');
    }

    public function veiculos()
    {
        return view('front.veiculos');
    }

    public function servicos()
    {
        return view('front.servicos');
    }

    public function procedimentos()
    {
        return view('front.procedimentos');
    }

    public function matricula()
    {
        $cursos = \DB::table('cursos')->get(); #Busca todos os cursos no banco.
        return view('front.matricula',  compact('cursos'));
    }
}
