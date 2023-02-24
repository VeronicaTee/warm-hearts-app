<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;



class LightningPaymentController extends Controller
{
    /**
     * Generate a new Lightning Invoice and return it to the user for payment.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateInvoice()
    {

        $output = null;
        // $command = 'source ~/.zshrc';
        $command = 'lncli1 addinvoice --amt=50 2>&1';
        // $result = shell_exec($command);
        // exec($command, $output);
        $result1 = exec($command, $output);
        // $result1 = implode("\n", $output);
        // $result = explode(PHP_EOL, $result1);
        $result = explode(PHP_EOL, exec($command, $output));
        
        // $result = explode(PHP_EOL, shell_exec('lncli1 addinvoice --amt=50'));

        // $output = null;
        // $command2 = 'lncli1 addinvoice --amt=50';

        // $result = exec($command, $output);

        // exec($command, $output);
        // $result = shell_exec($command2);
        // $result = shell_exec('lncli1 addinvoice --amt=50');
        // $result = json_encode($output);

        // $output = shell_exec($command);

        // Check if the output is empty
        if (empty($result)) {
            return response()->json([
                'error' => 'No output',
            ], 500);
        }

        // Return the output as an array
        // return response()->json([
        //     'output' => explode(PHP_EOL, $result),
        // ]);

        // $result = exec($command, $output);

        // $invoice = array();
        // $invoice = json_encode($result);

 
        
        return response()->json([
            'invoice' => $result
        ]);

        // $command = 'lncli1 addinvoice --amt=50';

        // // Execute the command and get the output
        // $output = shell_exec($command);

        // Return the output as a response
        // return response()->json([
        //     'output' => $output,
        // ]);

  
    }
}
