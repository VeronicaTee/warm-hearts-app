<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CaseController extends Controller
{


    // Cases
    // Return



    private $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'description' => 'Description of product 1',
            'price_btc' => 0.001,
            'price_ltc' => 0.01,
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'description' => 'Description of product 2',
            'price_btc' => 0.002,
            'price_ltc' => 0.02,
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'description' => 'Description of product 3',
            'price_btc' => 0.003,
            'price_ltc' => 0.03,
        ]
    ];



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // return response()->json(['products' => $products], 200);

        // return $products;


        return response()->json($this->products);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = Product::find($id);
        // if (!$product) {
        //     return response()->json(['message' => 'Product not found'], 404);
        // }
        // return response()->json(['product' => $product], 200);

        $product = array_values(array_filter($this->products, function($p) use ($id) {
            return $p['id'] == $id;
        }));
        if (count($product) > 0) {
            return response()->json($product[0]);
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price_btc' => 'required',
            'price_ln' => 'required',
            'description' => 'required'
        ]);

        $product = new Product([
            'name' => $request->input('name'),
            'price_btc' => $request->input('price_btc'),
            'price_ln' => $request->input('price_ln'),
            'description' => $request->input('description')
        ]);

        $product->save();

        return response()->json(['message' => 'Product created successfully'], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price_btc' => 'required',
            'price_ln' => 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->name = $request->input('name');
        $product->price_btc = $request->input('price_btc');
        $product->price_ln = $request->input('price_ln');
        $product->description = $request->input('description');
        $product->save();

        return response()->json(['message' => 'Product updated successfully'], 200);
    }

}
