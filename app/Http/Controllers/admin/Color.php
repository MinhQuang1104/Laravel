<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color as ModelsColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Color extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = ModelsColor::all();
        return view('admin.colors.color', ['colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:50',
            'color' => 'string|max:50|required'
        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator)
                         ->withInput();
        }

        ModelsColor::create([
            'name' => $request->name,
            'color' => $request->color
        ]);

        return redirect()->route('index.color');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = ModelsColor::findOrFail($id);
        return view('admin.colors.edit', ['color' => $color]);
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
            'color' => 'string|max:50|required'
        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $color = ModelsColor::findOrFail($id);

        $color->name = $request->name;
        $color->color = $request->color;

        $color->save();

        return redirect()->route('index.color');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = ModelsColor::findOrFail($id);

        $color->delete();

        return back()->with('message', 'Delete successfully');
    }
}
