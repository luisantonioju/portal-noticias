<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $noticias = Noticia::where('ativo', '=', 1)->orderByDesc('updated_at')->paginate(6);
    return view('home', ['noticias'=> $noticias]);
    }

    public function visualizarNoticias()
    {
        return view('visualizar');
    }

    public function contato(){
        return view('contato');
    }
}
