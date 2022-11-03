<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Discount_type;
use App\Models\Product as ModelsProduct;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ModelsProduct::with('category')->get();
        return view('admin.products.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $discount_types = Discount_type::all();
        $status = Status::all();

        return view('admin.products.create', ['categories' => $categories, 
                                                'discount_types' => $discount_types,
                                                'status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:50|required',
            'sku'  => 'string|max:50|unique:products,sku|required',
            'weight' => 'string|max:50',
            'dimension' => 'string|max:50',
            'price' => 'required',
            'status_id' => 'required',
            'category_id' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }
        
        ModelsProduct::create([
            'name' => $request->name,
            'sku'  => $request->sku,
            'weight' => $request->weight,
            'dimension' => $request->dimension,
            'description' => $request->description,
            'price' => $request->price,
            'old_price' => $request->ole_price,
            'discount' => $request->discount,
            'discount_type_id' => $request->discount_type_id,
            'hot' => $request->hot ? '1' : '0',
            'featured' => $request->featured ? '1' : '0',
            'status_id' => $request->status_id,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('index.product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ModelsProduct::findOrFail($id);

        $product_category = Category::all();
        $product_status = Status::all();
        $product_discount_type = Discount_type::all();
        
        return view('admin.products.edit', ['product' => $product,
                                            'product_category' => $product_category,
                                            'product_status' => $product_status,
                                            'product_discount_type' => $product_discount_type]);
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
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:50|required',
            'sku'  => 'string|max:50|unique:products,sku|required',
            'weight' => 'string|max:50',
            'dimension' => 'string|max:50',
            'price' => 'required',
            'status_id' => 'required',
            'category_id' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $product = ModelsProduct::findOrFail($id);

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->weight = $request->weight;
        $product->dimension = $request->dimension;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->discount = $request->discount;
        $product->discount_type_id = $request->discount_type_id;
        $product->hot = $request->hot;
        $product->featured = $request->featured;
        $product->status_id = $request->status_id;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect()->route('index.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ModelsProduct::findOrFail($id);

        $product->delete();
        
        return redirect()->route('index.product');
    }
}
