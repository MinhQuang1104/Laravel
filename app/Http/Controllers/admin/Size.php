<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Size as ModelsSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Size extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = ModelsSize::all();
        return view('admin.sizes.size', ['sizes' => $sizes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sizes.create');
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
            'name' => 'string|max:50',
            'size' => 'string|max:50|required'
        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator)
                         ->withInput();
        }

        ModelsSize::create([
            'name' => $request->name,
            'size' => $request->size
        ]);

        return redirect()->route('index.size');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = ModelsSize::findOrFail($id);
        return view('admin.sizes.edit', ['size' => $size]);
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
            'name' => 'string|max:50',
            'size' => 'string|max:50|required'
        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $size = ModelsSize::findOrFail($id);

        $size->name = $request->name;
        $size->size = $request->size;

        $size->save();

        return redirect()->route('index.size');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = ModelsSize::findOrFail($id);

        $size->delete();

        return back()->with('message', 'Delete successfully');
    }
}
