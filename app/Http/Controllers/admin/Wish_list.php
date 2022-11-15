<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wish_list as ModelsWish_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Wish_list extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wish_lists = ModelsWish_list::with('product')->get();

        $products = DB::table('products')
                        ->join('images', 'products.id', '=', 'images.product_id')
                        ->join('wish_list', 'products.id', '=', 'wish_list.product_id')
                        ->get();

        return view('admin.wish_lists.wish_list', ['wish_lists' => $wish_lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.wish_lists.create', ['products' => $products]);
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
            'product_id' => 'required'
        ],
        [],
        [
            'product_id' => 'product'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        ModelsWish_list::create([
            'product_id' => $request->product_id,
            'status' => $request->status
        ]);

        return redirect()->route('index.wish-list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wish_list = ModelsWish_list::findOrFail($id);
        $products = Product::all();
        
        return view('admin.wish_lists.edit', ['wish_list' => $wish_list,
                                              'products' => $products]);
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
            'product_id' => 'required'
        ],
        [],
        [
            'product_id' => 'product'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $wish_list = ModelsWish_list::findOrFail($id);

        $wish_list->product_id = $request->product_id;
        $wish_list->status = $request->status;
        $wish_list->save();

        return redirect()->route('index.wish-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wish_list = ModelsWish_list::findOrFail($id);
        
        $wish_list->delete();

        return back()->with('message', 'Delete Successfully');
    }
}
