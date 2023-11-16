<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use Illuminate\Http\Request;

class PrateleiraController extends Controller
{
    public function getAll(Request $request)
    {
        $produtos = Produto::paginate(10);
        return $produtos;

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

         ]);

        }

        return response()->json($produtos);
    }

    public function update (Request $request, int $id)
    {
        $produtos = Produto::findOrFail($id);
        $produtos->nome = $request->nome;
        $produtos->descricao = $request->descricao;
        $produtos->preco = $request->preco;
        $produtos->quantidade = $request->quantidade;
        $produtos->save();

        return response()->json($produtos);
    }

    public function destroy (Request $request, int $id)
    {
        $produtos = Produto::findOrFail($id);
        if ($produtos->delete()) {
            return response()->json([
                'status' => 'sucesso',
                'mensagem' => 'Produto excluído com sucesso'
            ], 200);
        }

        return response()->json([
        'status' => 'erro',
        'mensagem' => 'Falha ao deletar'
        ], 400);

    }

    public function show (Request $request)
    {
        $produtos = Produto::findorfail($request->id);
        return response()->json($produtos);
    }


}
