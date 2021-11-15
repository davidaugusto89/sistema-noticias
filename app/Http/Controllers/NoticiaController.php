<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticiaCategoria;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index(Request $request){
        if (!$request['search']) {
            $noticias = Noticia::all();
        } else {
            $s = $request['search'];
            $noticias = Noticia::join('noticias_categorias as nc','nc.id','noticias.noticia_categoria_id')
            ->where('noticias.titulo', 'like', "%$s%")
            ->orWhere('nc.categoria', 'like', "%$s%")
            ->whereNull('noticias.deleted_at')
            ->whereNull('nc.deleted_at');
        }

        return view('noticias.index', compact('noticias'));
    }

    public function acessar($id, $titulo){
        $noticia = Noticia::join('noticias_categorias as nc','nc.id','noticias.noticia_categoria_id')->find($id);

        return view('noticias.acessar', compact('noticia'));
    }

    public function cadastrar(){
        $categoria_lista = NoticiaCategoria::orderBy('categoria')->get();

        return view('noticias.cadastrar', compact('categoria_lista'));
    }

    public function salvar (Request $request){
        $noticia = Noticia::create([
            'noticia_categoria_id' => $request['slc_categoria'],
            'titulo' => $request['fld_titulo'],
            'manchete' => $request['fld_manchete'],
            'noticia' => $request['fld_noticia']
        ]);

        if ($noticia) {
            $request->session()->flash('message', 'Notícia cadastrada com sucesso!');
            $request->session()->flash('icon', 'success');
        } else {
            $request->session()->flash('message', 'Erro ao cadastrar a notícia!');
            $request->session()->flash('icon', 'error');
        }
        return redirect('noticias/cadastrar');
    }    
}
