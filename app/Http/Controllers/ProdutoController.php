<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('INDEX');
        $produtos = Produto::orderBy('nome')-> get();
        return view('produto.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderby('nome', 'ASC') -> pluck('nome', 'id');
        return view('produto.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd ($request->all());

        $produto = new Produto;
        $produto->categoria_id  = $request->categoria_id;
        $produto->nome          = $request->nome;
        $produto->quantidade    = $request->quantidade;
        $produto->valor         = $request->valor;
        $produto->save();

        return redirect()->action([ProdutoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = produto::find($id);
        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::orderby('nome', 'ASC') -> pluck('nome', 'id');
        return view('produto.edit', ['produto' => $produto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Produto::find($id);

        $produto->categoria_id  = $request->categoria_id;
        $produto->nome          = $request->nome;
        $produto->quantidade    = $request->quantidade;
        $produto->valor         = $request->valor;
        $produto->save();

        return redirect()->action([ProdutoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action([ProdutoController::class, 'index']);
    }
}
