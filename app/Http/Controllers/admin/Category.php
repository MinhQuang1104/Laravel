<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ModelsCategory::all();
        return view('admin.categories.category', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name' => 'string|required|max:50',
            'quantity' => 'numeric|required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        ModelsCategory::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description
        ]);

        return redirect()->route('index.category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ModelsCategory::findOrFail($id);
        return view('admin.categories.edit', ['category' => $category]);
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
            'name' => 'string|required|max:50',
            'quantity' => 'numeric|required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $category = ModelsCategory::findOrFail($id);
        
        $category->name = $request->name;
        $category->quantity = $request->quantity;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('index.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ModelsCategory::findOrFail($id);

        $category->delete();

        return back()->with('message', 'Delete Successfully');

    }
}
