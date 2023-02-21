<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       return Produto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return Produto::create($request->all());

        $request->validate([
            'nome' => 'required|min:3',
            'valor' => 'required|min:2|max:6',
            'loja_id' => 'required',
            'ativo' => 'required',
            'estoque' => 'required',
            ]);

        if (Produto::create($request->all())) {
            return response()->json([
                'message' => 'Produto Cadastrado com sucesso.' // Mensagem de retorno com sucesso
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao cadastrar o produto.' // Mensagem de retorno com erro
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($produto)
    {
       // return Produto::findorfail($produto);

       $produto = Produto::find($produto);
        if ($produto) {
            return $produto; // Retorno do produto
        }

        return response()->json([
            'message' => 'Erro ao pesquisar o produto.'  // Mensagem de retorno com erro
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $produto)
    {
        /*$produto = Produto::findorfail($produto);

        $produto->update($request->all());

        return $produto;*/

        $produto = Produto::find($produto);

        if($produto) {

        $produto->update($request->all());
        return $produto;
    }
    return response()->json([
        'message' => 'Erro ao atualizar o produto.'
    ], 404);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($produto)
    {
        //return Produto::destroy($produto);

        if (Produto::destroy($produto)){
            return response()->json([
                'message' => 'Produto deletado com sucesso.'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar a produto.'
        ], 404);
    }
}
