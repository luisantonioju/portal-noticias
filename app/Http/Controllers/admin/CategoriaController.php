<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Lista de noticia do banco
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Chamar a view do cadastrar noticia
     */
    public function create()
    {
        return view("admin.categorias.cadastrar");
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
        return view("admin.categorias.editar");
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
