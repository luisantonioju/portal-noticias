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
        // dd($request);
        $request->validate([
            'nome' => 'required|min:10|max:255',
            'descricao' => 'required',
            'cor' => 'required',
        ]);

        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->cor = $request->cor;
        $categoria->ativo = $request->ativo;

        $categoria->save();

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Visualizar uma noticia
     */

    /**
     * Chamar a view do editar noticias
     */
    public function edit(string $id)
    {

        $categoria = Categoria::findOrFail($id);

        return view("admin.categorias.editar", [
            'categoria' => $categoria,
        ]);
    }

    /**
     * Armazenar a atualizacao dos dados da noticia
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'cor'       => 'required',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->nome = $request->categoria;
        $categoria->descricao = $request->descricao;
        $categoria->cor = $request->cor;
        $categoria->ativo = $request->ativo;

        return redirect()->route('admin.categorias.index');
    }
    /**
     * excluir uma noticia de banco de dados.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('admin.categorias.index');
    }
}
