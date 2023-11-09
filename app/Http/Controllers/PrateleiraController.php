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
        // return response()->json([
        //     'id' => $request->foo,
        //     'nome' => $request->foo,
        //     'descricao' => $request->foo,
        //     'tipo' => $request->foo,
        //     'quanidade' => $request->foo

        // ]);
    }

    public function create (Request $request)
    {
        return response()->json([
            Produto::create([
            'id' => $request->foo,
            'nome' => $request->foo,
            'descricao' => $request->foo,
            'tipo' => $request->foo,
            ])

        ]);
    }

    public function update (Request $request)
    {
        return response()->json([
        $produtos = Produto::findOrFail( $request->id );
        $produtos->nome = $request->input('nome');
        $produtos->tipo = $request->input('tipo');
        $produtos->descricao = $request->input('descricao');
        $produtos->quantidade = $request->input('quantidade');
        ]);

        if( $produtos->save() ){
            return new Produto($produtos);
          }
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
