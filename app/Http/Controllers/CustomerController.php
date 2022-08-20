<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::paginate(10);
        if (sizeof($data) == 0) {
            return Response()->json(['message' => 'Não existem clientes cadastrados!'], 200);
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
            'enterprise_id' => 'required|integer',
            'contract_responsible' => 'required|string|max:255',
            'couple_name' => 'required|string|max:255',
            'document' => 'required|string|unique:customers|max:15',
            'phone_a' => 'required|string|max:20',
            'phone_b' => 'nullable|string|max:20',
            'district' => 'required|string|max:120',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
        ];

        $messages = [
            'document.unique' => 'Esse CPF já existe!',
            'email.unique' => 'Esse e-mail já existe!',
        ];

        $data = $this->validate($request, $rules, $messages);

        Customer::create($data);
        return Response()->json(['message' => 'Cliente criado com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Customer::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        return Response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Customer::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        $request->validate([
            'enterprise_id' => 'required|numeric',
            'contract_responsible' => 'required|string|max:255',
            'couple_name' => 'required|string|max:255',
            'document' => 'required|string|max:15',
            'phone_a' => 'required|string|max:20',
            'phone_b' => 'nullable|string|max:20',
            'district' => 'required|string|max:120',
            'address' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $data->enterprise_id = $request->enterprise_id;
        $data->contract_responsible = $request->contract_responsible;
        $data->couple_name = $request->couple_name;
        $data->document = $request->document;
        $data->phone_a = $request->phone_a;
        $data->phone_b = $request->phone_b;
        $data->district = $request->district;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->save();

        return Response()->json(['message' => 'Cliente atualizado com sucesso!'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Customer::destroy($id);
        if(empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }
        return Response()->json(['message' => 'Cliente(s) removido(s) com sucesso!'], 202);
    }

    public function storeNewCustomer(Request $request)
    {
        $data = $request->validate([
            'enterprise_id' => 'required|integer',
            'contract_responsible' => 'required|string|max:255',
            'couple_name' => 'required|string|max:255',
            'document' => 'required|string|unique:customers|max:15',
            'phone_a' => 'required|string|max:20',
            'phone_b' => 'nullable|string|max:20',
            'district' => 'required|string|max:120',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
        ]);

        Customer::create($data);
        return Response()->json(['message' => 'Obrigado, seus dados foram enviados com sucesso!'], 201);
    }
}
