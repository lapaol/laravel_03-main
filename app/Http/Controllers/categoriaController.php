<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('INDEX');
        $categorias = categoria::orderBy('nome')-> get();
        return view('categoria.index', ['categoria' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd ($request->all());

        $categoria = new categoria;
        $categoria->nome          = $request->nome;
        $categoria->save();

        return redirect()->action([categoriaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = categoria::find($id);
        return view('categoria.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = categoria::find($id);
        return view('categoria.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = categoria::find($id);

        $categoria->nome          = $request->nome;
        $categoria->save();

        return redirect()->action([categoriaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = categoria::find($id);
        $categoria->delete();
        return redirect()->action([categoriaController::class, 'index']);
    }
}
