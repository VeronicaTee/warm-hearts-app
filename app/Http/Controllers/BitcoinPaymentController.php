<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;



class BitcoinPaymentController extends Controller
{


    public function getWalletBalance()
    {

        $output = null;
        $command = 'bitcoin-cli -rpcwallet=warmheartslnd getbalance 2>&1';
        exec($command, $output);

        $balance = implode("\n", $output);

        return $balance;

        // return view('index', ['balance' => $balance]);
        // return view('home', $balance);

        // return $balance;

    }


    /**
     * Generate a new Bitcoin address and return it to the user for payment.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateNewAddress(Request $request)
    {
        // Get the amount parameter from the request
        $amount = $request->input('amount');


        $output = null;
        $command = 'bitcoin-cli -rpcwallet=warmheartslnd getnewaddress 2>&1';
        exec($command, $output);
        $address = implode("\n", $output);


        // Build the message with the amount and output address
        $message = "Please pay to the following Bitcoin wallet address. Thanks for your donation!";

        return view('donate-success',[
            'message' => $message,
            'address'=> $address,
            'amount' => "{$amount} satoshis"
        ]);


        // return response()->json([
        //     'message' => $message,
        //     'address'=> $address,
        //     'amount' => "{$amount} satoshis"
        // ]);

    }



}


