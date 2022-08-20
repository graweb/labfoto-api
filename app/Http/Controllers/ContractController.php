<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contract::with(['customer', 'package'])->paginate(10);
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
        $check = Contract::where('customer_id', $request->customer_id)->first();

        if($check) {
            return Response()->json(['message' => 'Já existe um contrato associado para o(s) cliente(s) selecionado(s)!'], 404);
        }

        $data = $request->validate([
            'enterprise_id' => 'required|numeric',
            'customer_id' => 'required|exists:customers,id',
            'package_id' => 'nullable|exists:packages,id',
            'service_type' => 'nullable|integer',
            'professionals_total' => 'nullable|integer',
            'event_type' => 'nullable|integer',
            'event_address' => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'event_time' => 'nullable|date_format:H:i',
            'registry' => 'nullable|string|max:80',
            'registry_address' => 'nullable|string|max:255',
            'registry_date' => 'nullable|date',
            'registry_time' => 'nullable|date_format:H:i',
            'church' => 'nullable|string|max:80',
            'church_address' => 'nullable|string|max:255',
            'church_date' => 'nullable|date',
            'church_time' => 'nullable|date_format:H:i',
            'reception' => 'nullable|string|max:80',
            'reception_address' => 'nullable|string|max:255',
            'reception_date' => 'nullable|date',
            'reception_time' => 'nullable|date_format:H:i',
            'making_of' => 'nullable|string|max:80',
            'making_of_address' => 'nullable|string|max:255',
            'making_of_date' => 'nullable|date',
            'making_of_time' => 'nullable|date_format:H:i',
            'album_size' => 'nullable|integer',
            'album_type' => 'nullable|integer',
            'album_blade' => 'nullable|integer',
            'delivery_type' => 'nullable|integer',
            'example_photos' => 'nullable|boolean',
            'album_case' => 'nullable|boolean',
            'box_case' => 'nullable|integer',
            'pendrive_photos' => 'nullable|boolean',
            'woman_day' => 'nullable|boolean',
            'man_day' => 'nullable|boolean',
            'debutante_day' => 'nullable|boolean',
            'drone_photos' => 'nullable|boolean',
            'external_team' => 'nullable|boolean',
            'status_board' => 'required|integer',
            'signed' => 'required|boolean',
        ]);

        Contract::create($data);
        return Response()->json(['message' => 'Contrato criado com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contract::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        return Response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Contract::find($id);
        if (empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }

        $request->validate([
            'enterprise_id' => 'required|numeric',
            'customer_id' => 'required|exists:customers,id',
            'package_id' => 'nullable|exists:packages,id',
            'service_type' => 'nullable|integer',
            'professionals_total' => 'nullable|integer',
            'event_type' => 'nullable|integer',
            'event_address' => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'event_time' => 'nullable|date_format:H:i',
            'registry' => 'nullable|string|max:80',
            'registry_address' => 'nullable|string|max:255',
            'registry_date' => 'nullable|date',
            'registry_time' => 'nullable|date_format:H:i',
            'church' => 'nullable|string|max:80',
            'church_address' => 'nullable|string|max:255',
            'church_date' => 'nullable|date',
            'church_time' => 'nullable|date_format:H:i',
            'reception' => 'nullable|string|max:80',
            'reception_address' => 'nullable|string|max:255',
            'reception_date' => 'nullable|date',
            'reception_time' => 'nullable|date_format:H:i',
            'making_of' => 'nullable|string|max:80',
            'making_of_address' => 'nullable|string|max:255',
            'making_of_date' => 'nullable|date',
            'making_of_time' => 'nullable|date_format:H:i',
            'album_size' => 'nullable|integer',
            'album_type' => 'nullable|integer',
            'album_blade' => 'nullable|integer',
            'delivery_type' => 'nullable|integer',
            'example_photos' => 'nullable|boolean',
            'album_case' => 'nullable|boolean',
            'box_case' => 'nullable|integer',
            'trial_photos' => 'nullable|boolean',
            'woman_day' => 'nullable|boolean',
            'man_day' => 'nullable|boolean',
            'debutante_day' => 'nullable|boolean',
            'drone_photos' => 'nullable|boolean',
            'external_team' => 'nullable|boolean',
            'status_board' => 'required|integer',
            'signed' => 'required|boolean',
        ]);

        $data->enterprise_id = $request->enterprise_id;
        $data->customer_id = $request->customer_id;
        $data->package_id = $request->package_id;
        $data->service_type = $request->service_type;
        $data->professionals_total = $request->professionals_total;
        $data->event_type = $request->event_type;
        $data->event_address = $request->event_address;
        $data->event_date = $request->event_date;
        $data->event_time = $request->event_time;
        $data->registry = $request->registry;
        $data->registry_address = $request->registry_address;
        $data->registry_date = $request->registry_date;
        $data->registry_time = $request->registry_time;
        $data->church = $request->church;
        $data->church_address = $request->church_address;
        $data->church_date = $request->church_date;
        $data->church_time = $request->church_time;
        $data->reception = $request->reception;
        $data->reception_address = $request->reception_address;
        $data->reception_date = $request->reception_date;
        $data->reception_time = $request->reception_time;
        $data->making_of = $request->making_of;
        $data->making_of_address = $request->making_of_address;
        $data->making_of_date = $request->making_of_date;
        $data->making_of_time = $request->making_of_time;
        $data->album_size = $request->album_size;
        $data->album_type = $request->album_type;
        $data->album_blade = $request->album_blade;
        $data->delivery_type = $request->delivery_type;
        $data->example_photos = $request->example_photos;
        $data->album_case = $request->album_case;
        $data->box_case = $request->box_case;
        $data->trial_photos = $request->trial_photos;
        $data->woman_day = $request->woman_day;
        $data->man_day = $request->man_day;
        $data->debutante_day = $request->debutante_day;
        $data->drone_photos = $request->drone_photos;
        $data->external_team = $request->external_team;
        $data->status_board = $request->status_board;
        $data->signed = $request->signed;
        $data->save();

        return Response()->json(['message' => 'Contrato atualizado com sucesso!'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contract::destroy($id);
        if(empty($data)) {
            return Response()->json(['message' => 'Não encontrado'], 404);
        }
        return Response()->json(['message' => 'Contrato(s) removido(s) com sucesso!'], 202);
    }
}
