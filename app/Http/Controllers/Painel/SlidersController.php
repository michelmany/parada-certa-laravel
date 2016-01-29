<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class SlidersController extends Controller
{
    public function index()
    {
        $page_title = 'Banners';
        return view('painel.sliders.index', ['page_title'=>$page_title]);
    }

    public function create()
    {
        $page_title = 'Adicionar Banner';
        return view('painel.sliders.create', ['page_title'=>$page_title]);
    }
}
