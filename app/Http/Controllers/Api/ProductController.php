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
        $products = Product::get();
        $accsessToken = $products->createToken("Api Token")->accessToken;
        return response()->json([
            'message'=> "added product had been success",
            'status'=> 200,
            'date'=> $products,
            "access_token" => $accsessToken
        ]);
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
    public function store(Request $request)
    {
        $created_data = $request->except( ['image', "tax"] );

        if($request->hasFile('image')) {
            $image = $request->image;
            $path=time().'.'.$image->getClientOriginalExtension();          
            $request->image->move('uploads/products/', $path);
            $created_data['image'] = $path;
        }
    $product = Product::create($created_data);

    if($request->tax) {
        $product->taxes()->attach($request->tax);
    }
   
        $accsessToken = $product->createToken('Api Token')->accessToken;
        // return response(['product'=>$product, 'accsessToken' =>$accsessToken]);
    
   
    return response()->json([
        'message'=> "added product had been success",
         'status'=> 200,
         'date'=> $product,
         "access_token" => $accsessToken
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        $accsessToken = $products->createToken("Api Token")->accessToken;
        return response()->json([
            'message'=> "added product had been success",
            'status'=> 200,
            'date'=> $products,
            "access_token" => $accsessToken
        ]);
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
