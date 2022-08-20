<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DateTimeZone;

class PdfController extends Controller
{
    public function contractCustomer($id)
    {
        $data = Contract::where('id', Crypt::decrypt($id))->with(['customer', 'package'])->first();
        return Response()->json($data, 200);
    }

    public function contractGenerate($id, $signed)
    {
        $data = Contract::where('id', Crypt::decrypt($id))->with(['customer', 'package'])->first();
        $pdf = PDF::loadView('contract.pdf', compact(['data', 'signed']));

        if ($signed) {
            $data->signed = 1;
            $data->signed_at = Carbon::now(new DateTimeZone('America/Sao_Paulo'));
            $data->save();
        }
        return $pdf->stream($data->customer->couple_name . '.pdf');
    }

    public function imgBackground()
    {
        return Response()->json(['image_back' => url('image/top-bg.jpg'), 'image_signed' => url('image/contract_signed.jpg')], 200);
    }
}
