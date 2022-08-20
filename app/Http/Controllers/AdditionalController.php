<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Additional::paginate(10);
        if (sizeof($data) == 0) {
            return Response()->json(['message' => 'Não existem adicionais registrados!'], 200);
        }

        return Response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'enterprise_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Additional::create($data);
        return Response()->json(['message' => 'Adicional criado com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Additional::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        return Response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Additional::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        $request->validate([
            'enterprise_id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $data->enterprise_id = $request->enterprise_id;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return Response()->json(['message' => 'Adicional atualizado com sucesso!'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Additional::destroy($id);
        if(empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }
        return Response()->json(['message' => 'Adicional(is) removido(s) com sucesso!'], 202);
    }
}
