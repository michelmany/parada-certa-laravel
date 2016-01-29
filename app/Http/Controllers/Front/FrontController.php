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

}
