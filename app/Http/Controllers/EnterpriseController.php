<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Enterprise::paginate(10);
        if (sizeof($data) == 0) {
            return Response()->json(['message' => 'Não existem empresas cadastradas!'], 200);
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
        $rules = [
            'name' => 'required|string|max:120',
            'cnpj' => 'required|string|unique:enterprises|max:18',
            'responsible' => 'required|string|max:80',
            'district' => 'required|string|max:120',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:enterprises',
        ];

        $messages = [
            'cnpj.unique' => 'Esse CNPJ já existe!',
            'email.unique' => 'Esse e-mail já existe!',
        ];

        $data = $this->validate($request, $rules, $messages);

        Enterprise::create($data);
        return Response()->json(['message' => 'Empresa criada com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Enterprise::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        return Response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Enterprise::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:120',
            'responsible' => 'required|string|max:80',
            'district' => 'required|string|max:120',
            'address' => 'required|string|max:255',
        ]);

        $data->name = $request->name;
        $data->cnpj = $request->cnpj;
        $data->responsible = $request->responsible;
        $data->district = $request->district;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->save();

        return Response()->json(['message' => 'Empresa atualizada com sucesso!'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Enterprise::destroy($id);
        if(empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }
        return Response()->json(['message' => 'Empresa(s) removida(s) com sucesso!'], 202);
    }
}
