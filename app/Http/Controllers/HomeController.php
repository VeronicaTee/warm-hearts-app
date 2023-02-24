<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $output = null;
        $command = 'bitcoin-cli -rpcwallet=warmheartslnd getbalance 2>&1';
        exec($command, $output);

        $balance = implode("\n", $output);

        // $causes = ['1','2','3'];

        $causes = [
            [
                'id' => 1,
                'name' => 'Children Education',
                'description' => 'Our program provides support for children who may not have access to proper education due to financial constraints or other challenges. We work with local schools and educators to provide resources and educational opportunities that will help these children develop important skills, knowledge, and values that will serve them well throughout their lives. We believe that education is the key to unlocking a brighter future for the children.',
                'raised' => 0.001,
                'goal' => '$50,000',
            ],
            [
                'id' => 2,
                'name' => 'Disaster Relief',
                'description' => 'Our program works to provide immediate support to children and families affected by natural disasters. We provide emergency relief materials such as food, water, blankets, and medical supplies to help families get through the initial aftermath of the disaster. We also work to provide longer-term support, such as rebuilding homes and schools, providing counseling and mental health services, and helping families to regain their livelihoods.',
                'raised' => 0.002,
                'goal' => '$50,000',
            ],
            [
                'id' => 3,
                'name' => 'Orphans Support',
                'description' => 'This charity cause is dedicated to providing care and support for orphans who have lost their parents or guardians. Every child deserves a safe and loving home, and to provide a nurturing environment for orphans to grow and thrive. We work with local communities and organizations to identify the children who are in need of support and provide them with essential services such as shelter, food, education, and healthcare.',
                'raised' => 0.003,
                'goal' => '$50,000',
            ]
        ];

        return view('index', [
            'causes' => $causes,
            'balance' => $balance
        ]);
    }

    public function getWalletBalance()
    {

        $output = null;
        $command = 'bitcoin-cli -rpcwallet=warmheartslnd getbalance 2>&1';
        exec($command, $output);

        $balance = implode("\n", $output);

        // return $balance;

        return view('index', ['balance' => $balance]);
        // return view('home', $balance);

        // return $balance;

    }


}
