<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;
use ParadaCerta\Models\Post;

class PainelController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function auth()
    {

    }

    public function index()
    {
        $posts = $this->post->all();
        return view('admin.posts.index', compact('posts'));
    }

    public function dashboard()
    {
        $page_title = 'Painel';
        return view('painel.dashboard.index', ['page_title'=>$page_title]);
    }
    

}
