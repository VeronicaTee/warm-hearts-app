<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

use GuzzleHttp\Client;


// require 'vendor/autoload.php';

class BitcoinController extends Controller
{
    /**
     * Generate a new Bitcoin address and return it to the user for payment.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Set up the request data
        $requestData = [
            'jsonrpc' => '2.0',
            'id' => '1',
            'method' => 'getblockcount',
            'params' => []
        ];

        // Encode the request data as a JSON string
        $jsonRequest = json_encode($requestData);

        // Set up the request headers
        $requestHeaders = [
            'Content-type: application/json',
            'Authorization: Basic ' . base64_encode('lnd:lightning')
        ];

        // Send the request to the Bitcoin Core JSON-RPC API
        $response = file_get_contents('http://localhost:18332/', false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => implode("\r\n", $requestHeaders),
                'content' => $jsonRequest
            ]
        ]));

        // Decode the response JSON string into a PHP object
        $jsonResponse = json_decode($response);

        // Print the response data
        print_r($jsonResponse);
    
    }
}
