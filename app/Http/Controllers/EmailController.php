<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSendContractEmail;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EmailController extends Controller
{
    public function sendContractByEmail(Request $request)
    {
        $contract = Contract::find($request->id);

        $emailData = [
            'to' => $contract->customer->email,
            'client' => $contract->customer->contract_responsible,
            'contract_link' => Crypt::encrypt($request->id),
        ];

        dispatch(new ProcessSendContractEmail($emailData));

        return Response()->json(['message' => 'Contrato enviado com sucesso!'], 200);
    }
}
