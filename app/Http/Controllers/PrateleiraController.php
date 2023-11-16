<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use Illuminate\Http\Request;

class PrateleiraController extends Controller
{
    public function getAll(Request $request)
    {
        $produtos = Produto::paginate(10);
        return response()->json($produtos);

    }

    public function create (Request $request)
    {
        $produtos = $request->produtos;
        foreach($produtos as $cadaProduto){

        Produto::create([

            'nome' => $cadaProduto['nome'],
            'descricao' => $cadaProduto['descricao'],
            'preco' => $cadaProduto['preco'],
            'quantidade' => $cadaProduto['quantidade'],
            // 'id' => $request->input['id'],
            // 'nome' =>$request->input['nome'],
            // 'descricao' =>$request->input['descricao'],
            // 'preco' =>$request->input['preco'],
            // 'quantidade' =>$request->input['quantidade'],


         ]);

        }

        return response()->json($produtos);
    }

    public function update (Request $request)
    {
        $produtos = Produto::findOrfail($request->produtos->id);
        $produtos->nome = $request->produto->nome;
        $produtos->descricao = $request->produto->descricao;
        $produtos->preco = $request->produto->preco;
        $produtos->quantidade = $request->produto->quantidade;
        $produtos->save();

        return response()->json($produtos);
    }

    public function destroy (Request $request)
    {
        $produtos = Produto::findorfail($request->id);

        if ($produtos->save()){
            return response()->json ([
                'status'=> 'sucesso',
                'mensagem' => 'Produto Excluido com sucesso'
            ], 200);

        }

        return response()->json([
            'status'=> 'sucesso',
            'mensagem' => 'Falha ao Deletar'
        ], 400);


        $produtos = Produto::findorfail($request->id);
        $produtos->delete();

        return response()->json($produtos);
    }

    public function show (Request $request)
    {
        $produtos = Produto::findorfail($request->id);
        return response()->json($produtos);
    }


}
