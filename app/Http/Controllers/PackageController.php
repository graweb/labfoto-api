<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Package::paginate(10);
        if (sizeof($data) == 0) {
            return Response()->json(['message' => 'Não existem serviços cadastrados!'], 200);
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
            'amount' => 'required|numeric',
            'amount_full' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'pendrive' => 'required|boolean',
            'online' => 'required|boolean',
            'description' => 'nullable',
        ]);

        Package::create($data);
        return Response()->json(['message' => 'Pacote criado com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Package::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        return Response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Package::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        $request->validate([
            'enterprise_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'amount_full' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'pendrive' => 'required|boolean',
            'online' => 'required|boolean',
            'description' => 'nullable',
        ]);

        $data->enterprise_id = $request->enterprise_id;
        $data->name = $request->name;
        $data->amount = $request->amount;
        $data->amount_full = $request->amount_full;
        $data->payment_method = $request->payment_method;
        $data->pendrive = $request->pendrive;
        $data->online = $request->online;
        $data->description = $request->description;
        $data->save();

        return Response()->json(['message' => 'Serviço atualizado com sucesso!'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Package::destroy($id);
        if(empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }
        return Response()->json(['message' => 'Serviço(s) removido(s) com sucesso!'], 202);
    }

    public function listServices()
    {
        $data = Package::paginate(10);
        if (sizeof($data) == 0) {
            return Response()->json(['message' => 'Não existem serviços cadastrados!'], 200);
        }

        return Response()->json($data, 200);
    }
}
