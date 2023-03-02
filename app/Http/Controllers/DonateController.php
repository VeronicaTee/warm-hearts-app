<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index(Request $request)
    {
        // return "Here's the form to fill";
        return view('donate');
    }

    public function confirm(Request $request)
    {
        // return "Here's the form to fill";
        return view('confirm-donation');
    }


}
