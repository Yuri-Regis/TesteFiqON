<?php

use App\Models\Produto;
use App\Models\Loja;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (Request $informacoes) {
    dd($informacoes->all());
});


Route::get('/produtos/{id]', function ($id){
    Produto::findorfail($id);
});
