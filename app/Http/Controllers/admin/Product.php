<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Discount_type;
use App\Models\General_info;
use App\Models\Image;
use App\Models\Product as ModelsProduct;
use App\Models\Size;
use App\Models\Tag;
use App\Models\Wish_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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
        $tags = Tag::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('admin.products.create', ['categories' => $categories, 
                                                'discount_types' => $discount_types,
                                                'tags' => $tags,
                                                'colors' => $colors,
                                                'sizes' => $sizes]);
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
            'sku'  => 'string|max:50|required',
            'weight' => 'string|max:50',
            'dimension' => 'string|max:50',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }
        
        $product = ModelsProduct::create([
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
            'size_guide' => $request->size_guide,
            'additional_info' => $request->additional_info,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        if($request->hasFile('images'))
        {
            $uploade_path = 'uploads/products/';

            foreach ($request->file('images') as $imagefile) {
                $name = $imagefile->getClientOriginalName();
                // $imagefile->move(public_path().'/assets/images/products/', $name);  
                $imagefile->move($uploade_path, $name);  
                $image_url = $uploade_path.$name;

                $product->image()->create([
                    'image' => $image_url
                ]);
            }
        }

        if($request->wish)
        {
            $product->wishList()->create([
                'status' => $request->wish ? 'In stock' : ''
            ]);
        }

        if($request->tag_id)
        {
            foreach($request->tag_id as $tag)
            {
                $product->product_tags()->create([
                    'tag_id' => $tag
                ]);
            }
        }

        for($i = 0; $i < count($request->product_color_id); $i++) {
            $product->general_info()->create([
                'color_id' => $request->product_color_id[$i],
                'size_id' => $request->product_size_id[$i],
                'quantity' => $request->quantity[$i],
                'price' => $request->price2[$i]
            ]);
        }
        
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
        $data['product'] = $product;
        // dd($product->wishList);
        if ( count($product->wishList) > 0 ) {
            foreach($product->wishList as $wish){ 
                if ($wish->product_id == $product->id ) {
                    $data['wishlist_check'] = true;
                    break;
                }
                else $data['wishlist_check'] = false;
            }
        } else $data['wishlist_check'] = false;
        

        $data['tags'] = Tag::all();
        $data['colors'] = Color::all();
        $data['sizes'] = Size::all();
        $data['product_category'] = Category::all();
        $data['product_discount_type'] = Discount_type::all();
        // dd($data);
        return view('admin.products.edit', $data);
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
        // dd($request);

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:50|required',
            'sku'  => 'string|max:50|required',
            'weight' => 'string|max:50',
            'dimension' => 'string|max:50',
            'price' => 'required',
            'category_id' => 'required'
        ], 
        [], 
        [
            'category_id' => 'category'
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
        $product->size_guide = $request->size_guide;
        $product->additional_info = $request->additional_info;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->save();

        if($request->wish)
        {
            $product->wishList()->update([
                'status' => $request->wish ? 'In stock' : ''
            ]);
        }
        // $wish_list = Wish_list::where('product_id', $id);
        
        if($request->tag_id)
        {
            $product->product_tags()->delete();
            foreach($request->tag_id as $tag)
            {
                $product->product_tags()->create([
                    'tag_id' => $tag
                ]);
            }
        }

        if($request->product_color_id)
        {
            $product->general_info()->delete();
            for($i = 0; $i < count($request->product_color_id); $i++) {
                $product->general_info()->create([
                    'color_id' => $request->product_color_id[$i],
                    'size_id' => $request->product_size_id[$i],
                    'quantity' => $request->quantity[$i],
                    'price' => $request->price2[$i]
                ]);
            }
        }

        if($request->hasfile('images'))
        {
            $uploade_path = 'uploads/products/';

            foreach ($request->file('images') as $imagefile) {
                $name = $imagefile->getClientOriginalName(); 
                $imagefile->move($uploade_path, $name);  
                $image_url = $uploade_path.$name;

                $product->image()->create([
                    'image' => $image_url,
                    'product_id' => $product->id 
                ]);
            }
        }

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
        // Delete foreign key
        // $wish_list = Wish_list::where('product_id', $id);
        // $wish_list->delete();

        $product = ModelsProduct::findOrFail($id);

        $product->product_tags()->delete();
        $product->general_info()->delete();
        $product->wishList()->delete();
        $product->image()->delete();

        $product->delete();

        return redirect()->route('index.product');
    }

    public function destroyImage($image_id)
    {
        $product_image = Image::findOrFail($image_id);
        if(File::exists($product_image->image))
        {
            File::delete($product_image->image);
        }

        $product_image->delete();

        return back()->with('message', 'Delete Successfully');
    }

    public function view($id)
    {
        $product = ModelsProduct::findOrFail($id);
        $images = ModelsProduct::find($id)->image;
        $image = ModelsProduct::find($id)->image()->first();
        $colors = ModelsProduct::find($id)->color;
        $sizes = ModelsProduct::find($id)->size;

        return view('admin.products.view', compact('product', 'images', 'image', 'colors', 'sizes'));
    }

    public function viewAjax(Request $request, $id)
    {
        $color = $request->color;
        $size = $request->size;
        
        $prices = DB::table('general_info')
        ->where('color_id', $color)
        ->where('size_id', $size)
        ->get()
        ->first();      

        if($prices) {
            return Response::json(['price' => $prices->price,
                                   'message' => '']);
        } else {
            $product = ModelsProduct::findOrFail($id);
            return Response::json(['price' => $product->price,
                                   'message' => 'The product does not have this color or size']);
        }
    }

    public function addWishList($id)
    {
        $product = ModelsProduct::findOrFail($id);
        
        if($product)
        {
            $product->wishList()->create([
                'status' => 'In stock'
            ]);
        }
    }
}
