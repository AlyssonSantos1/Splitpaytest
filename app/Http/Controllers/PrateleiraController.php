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
        $produtos = Produto::findorfail($id);
        $produtos->nome = $request ->nome;
        $produtos->tipo = $request ->tipo;
        $produtos->preco = $request->input->descricao;
        $produtos->quantidade = $request->input->quantidade;
        $produtos->save();

        return response()->json($produtos);
    }

    public function destroy ($id)
    {
        $produtos = Produto::findorfail($id);
        $produtos->delete();

        return response()->json($produtos);
    }

    public function show ($id)
    {
        // return response()->json([
        //     $produtos = Produto::findOrFail($id);
        //     return ( $produtos );
        // ]);
    }


}
