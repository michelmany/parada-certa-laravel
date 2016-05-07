<?php

namespace ParadaCerta\Http\Controllers\Front;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {

        $banners = \ParadaCerta\Models\Banner::orderBy('order')->get();
        return view('front.index')->with(compact('banners'));
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
