<?php

namespace App\Http\Controllers\API\Products\V1;

use App\Http\Controllers\Controller;
use App\Models\API\Products\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Products\ProductResource;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Products\ProductCollection;
use App\Http\Controllers\API\BaseController as BaseController;

class ProductController extends BaseController
{
    public function index(){
        $product=Product::all();
        return $this->sendResponse($product, 'Product info retrieved successfully.');
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\API\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$token= request()->user();
        //$token= request()->bearerToken();
        //$product = DB::table('Products')->where('id', $id);
        //$product=Product::all();
        //$d=$product->last();
       // return $this->sendResponse(new ProductCollection($product),'successfully');

        $product = DB::table('Products')->whereRaw('id='.$id)->get();
        return $this->sendResponse(ProductResource::collection($product), 'Product info retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\API\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\API\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\API\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
