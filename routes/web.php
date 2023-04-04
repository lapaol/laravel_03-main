<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\categoriaController;

Route::get('/', function () {
    return view('welcome');
});

//------------------Produto----------------------------

//Index
Route::get('/produto', [ProdutoController::class, 'index'])
->name('produto.index');

//Create
//Exibir o Formulario
Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create');

//Salvar Formulario
Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto.store');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])
->name('produto.show');

//Edit
//Exibir o formulario com os dados do recurso

Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit');

//Atualiza os dados do recurso passados pelo formulario

Route::put('/produto/{id}', [ProdutoController::class, 'update'])
->name('produto.update');

//Deletar

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])
->name('produto.destroy');

//--------------------------Categoria-------------------------------

//Index
Route::get('/categoria', [categoriaController::class, 'index'])
->name('categoria.index');

//Create
//Exibir o Formulario
Route::get('/categoria/create', [categoriaController::class, 'create'])
->name('categoria.create');

//Salvar Formulario
Route::post('/categoria/create', [categoriaController::class, 'store'])
->name('categoria.store');

Route::get('/categoria/{id}', [categoriaController::class, 'show'])
->name('categoria.show');

//Edit
//Exibir o formulario com os dados do recurso

Route::get('/categoria/{id}/edit', [categoriaController::class, 'edit'])
->name('categoria.edit');

//Atualiza os dados do recurso passados pelo formulario

Route::put('/categoria/{id}', [categoriaController::class, 'update'])
->name('categoria.update');

//Deletar

Route::delete('/categoria/{id}', [categoriaController::class, 'destroy'])
->name('categoria.destroy');