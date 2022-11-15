<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Discount_type as ModelsDiscount_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Discount_type extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discount_types = ModelsDiscount_type::all();
        return view('admin.discount_types.discount_type', ['discount_types' => $discount_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discount_types.create');
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
            'type_name' => 'string|max:50|required'
        ],
        [],
        [
            'type_name' => 'type name'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        ModelsDiscount_type::create([
            'type_name' => $request->type_name
        ]);

        return redirect()->route('index.discount-type');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount_type = ModelsDiscount_type::findOrFail($id);
        return view('admin.discount_types.edit', ['discount_type' => $discount_type]);
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
            'type_name' => 'string|max:50|required'
        ],
        [],
        [
            'type_name' => 'type name'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $discount_type = ModelsDiscount_type::findOrFail($id);

        $discount_type->type_name = $request->type_name;
        $discount_type->save();

        return redirect()->route('index.discount-type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discount_type = ModelsDiscount_type::findOrFail($id);
        
        $discount_type->delete();

        return back()->with('message', 'Delete Successfully');
    }
}
