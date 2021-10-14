<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $created_data = $request->except(
            'bulkunits',
            'vendors',
            'warehouses',
            'prices',
            'symbols',
            'max_stocks',
            'min_stocks',
            'order_limits',
            'consumer_prices',
            'min_prices_sale',
            'prices_buy',
            'options',
            'relative_prices',
            'twosides',
            'cost_prices',
            'opening_cost_prices',
            'quantaties'
        );

        if($request->hasFile('image')) {
            $image = $request->image;
            $path=time().'.'.$image->getClientOriginalExtension();          
            $request->image->move('uploads/products/', $path);
            $created_data['image'] = $path;
        }
    $product = Product::create($created_data);
    $data = $request->all()['tax'];
    $product->taxes()->attach($data);
    return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
