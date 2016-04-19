<?php

namespace ParadaCerta\Http\Controllers\Painel;

use Illuminate\Http\Request;
use ParadaCerta\Models\Banner;
use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class SlidersController extends Controller
{

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }


    public function index()
    {
        $banners = $this->banner->orderBy('order')->get();
        return view('painel.sliders.index')->with(compact('banners'));
    }

    public function create()
    {
        $page_title = 'Adicionar Banner';
        return view('painel.sliders.create', ['page_title'=>$page_title]);
    }

    public function upload(Request $request)
    {

        /**
        * Request related
        */

        $file = \Request::file('file');

        /*
        * Storage related
        */

        $storagePath = storage_path().'/app/images/sliders';

        # Aqui estou setando o nome do arquivo com data e horario. Criptografia forte para não aparecer dois nomes iguais nunca.
        $fileName = md5(date('Y-m-d') . $file->getClientOriginalName() .time()) . strrchr($file->getClientOriginalName(), '.');
 
        /*
        * Database related
        */

        $fileModel = new Banner;
        $fileModel->image_url = $fileName;
        $fileModel->link = $request->input('link');
        $fileModel->title = $request->input('title');

        $fileModel->save();

        $file->move($storagePath, $fileName);

        return redirect()->route('sliders')->with('success', 'Banner cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $banner = $this->banner->find($id);
        return view('painel.sliders.edit')->with(compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $this->banner->find($id)->update($request->all());
        return redirect()->route('sliders')->with('success', 'Banner atualizado com sucesso!');
    }

    public function order(Request $request)
    {
        $list_order = $request->list_order;

        $list = explode(',' , $list_order);
        $i = 1; 

        foreach($list as $id) {
            $this->banner->find($id)->update(['order' => $i]);
            $i++ ;
        }
    }

    public function destroy($id)
    {
        $banner = $this->banner->find($id); # Busco o registro específico pelo ID.

        $storagePath = storage_path().'/app/images/sliders'; # Seto o caminho dos arquivos

        $banner->delete(); # Deleto o registro selecionado do Banco.

        unlink($storagePath.'/'.$banner->image_url); # Deleto o arquivo na pasta.

        return redirect()->back()->with('success', 'Olá, o banner foi removido com sucesso!'); # Redireciono para a página anterior.

    }
}
