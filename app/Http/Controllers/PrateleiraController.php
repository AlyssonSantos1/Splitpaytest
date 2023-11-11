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

        $produtos = Produto::create([
            'id' =>$request->id,
            'nome' =>$request->nome,
            'descricao' =>$request->descricao,
            'preco' =>$request->preco,
            'quantidade' =>$request->quantidade,

         ]);

        return response()->json($produtos);
    }

    public function update (Request $request)
    {
        $produtos = Produto::findorfail($request->id);
        $produtos->nome = $request ->nome;
        $produtos->tipo = $request ->tipo;
        $produtos->preco = $request->input->descricao;
        $produtos->quantidade = $request->input->quantidade;
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
