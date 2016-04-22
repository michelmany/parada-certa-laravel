<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;
use ParadaCerta\Models\Post;
use ParadaCerta\Models\Banner;
use ParadaCerta\Models\Matricula;

class PainelController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function auth()
    {

    }

    public function dashboard()
    {
        $qtdBanners = Banner::count(); #pega quantidade de banners no banco.
        $qtdMatriculas = Matricula::count(); #pega quantidade de matrículas no banco.

        return view('painel.dashboard.index')->with(compact('qtdBanners', 'qtdMatriculas'));
    }
    

}
