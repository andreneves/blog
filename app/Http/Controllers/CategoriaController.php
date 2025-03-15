<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('categoria.categoria_index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = [
            'nome.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        //dd($request->all());
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('categoria.index')->with('message', 'Categoria cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = Categoria::find($id);
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('categoria.index')->with('message', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('message', 'Categoria excluída com sucesso!');
    }
}
