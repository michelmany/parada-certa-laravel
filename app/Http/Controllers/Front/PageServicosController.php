<?php

namespace ParadaCerta\Http\Controllers\Front;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class PageServicosController extends Controller
{
    // CATEGORIA A
    public function habilitacaoa()
    {
        return view('front.servicos.habilitacao-a');
    }
    public function inclusaoa()
    {
        return view('front.servicos.inclusao-a');
    }
    public function aulapraticaa()
    {
        return view('front.servicos.aulapratica-a');
    }
    public function reciclagemhabilitadosa()
    {
        return view('front.servicos.reciclagemhabilitados-a');
    }

    // CATEGORIA B
    public function habilitacaob()
    {
        return view('front.servicos.habilitacao-b');
    }
    public function inclusaob()
    {
        return view('front.servicos.inclusao-b');
    }
    public function aulapraticab()
    {
        return view('front.servicos.aulapratica-b');
    }
    public function reciclagemhabilitadob()
    {
        return view('front.servicos.reciclagemhabilitados-b');
    }

    // CATEGORIA AB
    public function habilitacaoab()
    {
        return view('front.servicos.habilitacao-ab');
    }
    public function inclusaoab()
    {
        return view('front.servicos.inclusao-ab');
    }
    public function aulapraticaab()
    {
        return view('front.servicos.aulapratica-ab');
    }
    public function reciclagemhabilitadosab()
    {
        return view('front.servicos.reciclagemhabilitados-ab');
    }

    // OUTROS
    public function tabelaprecos()
    {
        return view('front.servicos.tabelaprecos');
    }
    public function passoapasso()
    {
        return view('front.servicos.passoapasso');
    }

    // Real Infrator
    public function realinfrator()
    {
        return view('front.servicos.realinfrator');
    }

}
