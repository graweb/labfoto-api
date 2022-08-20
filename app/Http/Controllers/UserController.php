<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(10);
        if (sizeof($data) == 0) {
            return Response()->json(['message' => 'Não existem usuários cadastrados!'], 200);
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
            'pendrive_price' => 'required|numeric',
            'online_price' => 'required|numeric',
            'payment_method' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        User::create($data);
        return Response()->json(['message' => 'Usuário criado com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        return Response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        $request->validate([
            'enterprise_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'pendrive_price' => 'required|numeric',
            'online_price' => 'required|numeric',
            'payment_method' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        $data->enterprise_id = $request->enterprise_id;
        $data->name = $request->name;
        $data->pendrive_price = $request->pendrive_price;
        $data->online_price = $request->online_price;
        $data->payment_method = $request->payment_method;
        $data->description = $request->descriptio;
        $data->save();

        return Response()->json(['message' => 'Usuário atualizado com sucesso!'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::destroy($id);
        if(empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }
        return Response()->json(['message' => 'Usuário(s) removido(s) com sucesso!'], 202);
    }
}
