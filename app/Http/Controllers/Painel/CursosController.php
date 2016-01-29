<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class CursosController extends Controller
{
    public function index()
    {
        $page_title = 'Cursos';
        return view('painel.cursos.index', ['page_title'=>$page_title]);
    }
}
