<?php

use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\all;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::get('/loja', [LojaController::class, 'index']); *OTIMIZADO COM APIRESOURCE*
//Route::get('/loja/{id}', [LojaController::class, 'show']); *OTIMIZADO COM APIRESOURCE*
//Route::put('/loja/{id}', [LojaController::class, 'update']); *OTIMIZADO COM APIRESOURCE*
//Route::post('/loja', [LojaController::class, 'store']); *OTIMIZADO COM APIRESOURCE*
//Route::delete('/loja/{id}', [LojaController::class, 'destroy']); *OTIMIZADO COM APIRESOURCE*

//Route::apiResource('loja', LojaController::class); PRIMEIRA OTIMIZAÇÃO

//Route::get('/produto', [ProdutoController::class, 'index']); *OTIMIZADO COM APIRESOURCE*
//Route::get('/produto/{id}', [ProdutoController::class, 'show']); *OTIMIZADO COM APIRESOURCE*
//Route::put('/produto/{id}', [ProdutoController::class, 'update']); *OTIMIZADO COM APIRESOURCE*
//Route::post('/produto', [ProdutoController::class, 'store']); *OTIMIZADO COM APIRESOURCE*
//Route::delete('/produto/{id}', [ProdutoController::class, 'destroy']); *OTIMIZADO COM APIRESOURCE*

//Route::apiResource('produto', ProdutoController::class); PRIMEIRA OTIMIZAÇÃO

Route::apiResources([ //Resource final
    'loja' => LojaController::class,
    'produto' => ProdutoController::class
]);

Route::get('/buscar-produto/{id}', function ($id) {
    $produto = Produto::findorfail($id);
    echo "Nome: ", $produto->nome;
    echo "<br />";
    echo "Valor: ", $produto->valor;
    echo "<br />";
    echo "Loja_id: ", $produto->loja_id;
    echo "<br />";
    echo "Ativo: ", $produto->ativo;
    echo "<br />";
    echo "Estoque: ", $produto->estoque;
    echo "<br />";
    echo "Data de criação: ", date_format($produto->created_at,'m-d-Y');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
