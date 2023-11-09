<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrateleiraController extends Controller
{
    public function getAll(Request $request)
    {
        return response()->json([
            'id' => $request->foo,
            'nome' => $request->foo,
            'descricao' => $request->foo,
            'tipo' => $request->foo,
            'quanidade' => $request->foo

        ]);
    }

    public function create (Request $request)
    {
        return response()->json([
            'id' => $request->foo,
            'nome' => $request->foo,
            'descricao' => $request->foo,
            'tipo' => $request->foo,
            'quanidade' => $request->foo

        ]);
    }

    public function update (Request $request)
    {
        return response()->json([]);
    }

    public function edit (Request $request)
    {
        return response()->json([]);
    }

    public function destroy (Request $request)
    {
        return response()->json([]);
    }

    public function list ($id, Request $request)
    {
        return response()->json([]);
    }


}
