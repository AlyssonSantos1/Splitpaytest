<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use Illuminate\Http\Request;

class PrateleiraController extends Controller
{
    public function getAll(Request $request)
    {
        $produtos = Produto::paginate(10);
        return ($produtos);

    }

    public function create (Request $request)
    {
        $produto = Produto::create([
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
        $produtos->preco = $requestinput->descricao;
        $produtos->quantidade = $requestinput->quantidade;
        $produtos->save();

        return response()->json($produtos);
    }

    public function edit ($id, Request $request)
    {
        return response()->json([

        ]);
    }

    public function destroy (Request $request)
    {
        $produtos = Produto::findOrFail($id);
            if( $produtos->delete() ){

                return new Produto($produtos);
        }
    }

    public function show ($id)
    {
        return response()->json([
            $produtos = Produto::findOrFail( $id );
            return new Produto( $produtos );
        ]);
    }


}
