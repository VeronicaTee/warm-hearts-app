<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LightningInvoiceService;

class LightningInvoiceController extends Controller
{
    /**
     * Create a lightning invoice with the specified amount.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createInvoice(Request $request, LightningInvoiceService $invoiceService)
    {
        $amount = $request->input('amount');
        $invoice = $invoiceService->createInvoice($amount);
        return response()->json([
            'invoice' => $invoice
        ]);
    }
}
