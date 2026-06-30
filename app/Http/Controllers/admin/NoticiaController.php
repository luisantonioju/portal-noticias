<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Lista de noticia do banco
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('admin.noticias.index', [
            'noticias' => $noticias
        ]);
    }

    /**
     * Chamar a view do cadastrar noticia
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->pluck('nome', 'id');
        return view("admin.noticias.cadastrar", [
            'categorias' => $categorias
        ]);
    }

    /**
     * Armazenar dados.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Visualizar uma noticia
     */

    /**
     * Chamar a view do editar noticias
     */
    public function edit(string $id)
    {
        return view("admin.noticias.editar");
    }

    /**
     * Armazenar a atualizacao dos dados da noticia
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * excluir uma noticia de banco de dados.
     */
    public function destroy(string $id)
    {
        return "Funcionou . . Deletou o registro!";
    }
}
