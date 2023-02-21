<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Loja::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return Loja::create($request->all()); Adicionado a opção de mensagem de retorno para o usuario
        $request->validate([
        'nome' => 'required|min:3',
        'email' => 'required',
        ]);

        if (Loja::create($request->all())) {
            return response()->json([
                'message' => 'Loja Cadastrada com sucesso.' // Mensagem de retorno com sucesso
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao cadastrar o livro.' // Mensagem de retorno com erro
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($loja)
    {
        // return Loja::findorfail($loja); Adicionado a opção de mensagem de retorno para o usuario

        $loja = Loja::find($loja);
        if ($loja) {
            $response = [
                'loja' => $loja,
                'produtos' => $loja->produtos
            ];
            return $loja; // Retorno da loja com produtos
        }

        return response()->json([
            'message' => 'Erro ao pesquisar o livro.'  // Mensagem de retorno com erro
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $loja)
    {
        /*$loja = Loja::findorfail($loja);

        $loja->update($request->all());

        return $loja;*/

        $loja = Loja::find($loja);

        if($loja) {

        $loja->update($request->all());
        return $loja;
    }
    return response()->json([
        'message' => 'Erro ao atualizar a loja.'
    ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($loja)
    {
        //return Loja::destroy($loja);

        if (Loja::destroy($loja)){
            return response()->json([
                'message' => 'Loja deletado com sucesso.'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar a loja.'
        ], 404);
    }
}
