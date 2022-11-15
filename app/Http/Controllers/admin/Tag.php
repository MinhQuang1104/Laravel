<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag as ModelsTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Tag extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = ModelsTag::all();
        return view('admin.tags.tag', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
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
            'name' => 'string|max:50|required'
        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator)
                         ->withInput();
        }

        ModelsTag::create([
            'name' => $request->name
        ]);

        return redirect()->route('index.tag');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = ModelsTag::findOrFail($id);
        return view('admin.tags.edit', ['tag' => $tag]);
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
            'name' => 'string|max:50|required'
        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator)
                         ->withInput();
        }

        $tag = ModelsTag::findOrFail($id);

        $tag->name = $request->name;

        $tag->save();

        return redirect()->route('index.tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = ModelsTag::findOrFail($id);

        $tag->delete();

        return back()->with('message', 'Delete successfully');
    }
}
