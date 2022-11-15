@extends('layouts.master')

@section('header-content')
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('index.product')}}">Product</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create New Product</h3>
        </div>

        <div class="card-body">
            <form action="{{route('update.product', [$product->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <ul class="nav nav-tabs mb-3" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-product-tab" data-toggle="pill" href="#custom-tabs-four-product" role="tab" aria-controls="custom-tabs-four-product" aria-selected="true">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-detail-tab" data-toggle="pill" href="#custom-tabs-four-detail" role="tab" aria-controls="custom-tabs-four-detail" aria-selected="false">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-image-tab" data-toggle="pill" href="#custom-tabs-four-image" role="tab" aria-controls="custom-tabs-four-image" aria-selected="false">Image</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-product" role="tabpanel" aria-labelledby="custom-tabs-four-product-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Enter ...">
                
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sku</label>
                                            <input type="text" class="form-control" name="sku" value="{{$product->sku}}" placeholder="Enter ...">
                
                                            @error('sku')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="text" class="form-control" name="weight" value="{{$product->weight}}" placeholder="Enter ...">
                
                                            @error('weight')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Dimension</label>
                                            <input type="text" class="form-control" name="dimension" value="{{$product->dimension}}" placeholder="Enter ...">
                
                                            @error('dimension')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ...">{{$product->description}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Enter ...">
                
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Old Price</label>
                                            <input type="text" class="form-control" name="old_price" value="{{$product->old_price}}" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" class="form-control" name="discount" value="{{$product->discount}}" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Discount Type</label>
                                            <select class="form-control" name="discount_type_id">
                                                <option></option>
                                                @foreach ($product_discount_type as $discount_type)
                                                    <option value="{{$discount_type->id}}" 
                                                        {{$product->discount_type_id == $discount_type->id ? 'selected' : ''}}
                                                        >
                                                        {{$discount_type->type_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hot" value="1" {{$product->hot ? 'checked' : ''}}>
                                                <label class="form-check-label">Hot</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="featured" value="1" {{$product->featured ? 'checked' : ''}}>
                                                <label class="form-check-label">Featured</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="wish" value="1" {{ $wishlist_check ? 'checked' : '' }} >
                                                <label class="form-check-label">Wish</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tag</label>
                                            <select class="select2 form-control" multiple name="tag_id[]" data-placeholder="Select Tag" style="width: 100%;">
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}" 
                                                        @if($product->tag->containsStrict('id', $tag->id)) 
                                                            selected 
                                                        @endif>
                                                        {{ $tag->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control" name="status" value="{{ $product->status }}" placeholder="Enter ...">
                
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category_id">
                                                <option></option>
                                                @foreach ($product_category as $product_category)
                                                    <option value="{{$product_category->id}}"
                                                        {{$product->category_id == $product_category->id ? 'selected' : ''}}
                                                        >
                                                        {{$product_category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Size Guide
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <textarea id="summernote" name="size_guide" placeholder="Enter ...">{{ $product->size_guide }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Additional Information
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <textarea id="summernote2" name="additional_info" placeholder="Enter ...">{{ $product->additional_info }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-detail" role="tabpanel" aria-labelledby="custom-tabs-four-detail-tab">
                        <div class="form-group">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th class="col-sm-3">Color</th>
                                        <th class="col-sm-3">Size</th>
                                        <th class="col-sm-3">Quantity</th>
                                        <th class="col-sm-3">Price Detail</th>
                                        <th><button type="button" id="addRow" class="btn btn-success">+</button></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamicadd">
                                    @foreach ($product->general_info as $key => $items)
                                        <tr id="row{{$key}}">
                                            <td>
                                                <select class="form-control" name="product_color_id[]">
                                                    <option></option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{$color->id}}" 
                                                            @if($items->color_id == $color->id) 
                                                                selected 
                                                            @endif>
                                                            {{$color->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="product_size_id[]">
                                                    <option></option>
                                                    @foreach ($sizes as $size)
                                                        <option value="{{$size->id}}" 
                                                            @if($items->size_id == $size->id) 
                                                                selected 
                                                            @endif>
                                                            {{$size->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="quantity[]" class="form-control text-center" value="{{ $items->quantity }}">
                                            </td>
                                            <td>
                                                <input type="text" name="price2[]" class="form-control text-center" value="{{ $items->price }}">
                                            </td>
                                            <td><button type="button" id="{{$key}}" class="btn btn-danger deleteRow">-</button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-image" role="tabpanel" aria-labelledby="custom-tabs-four-image-tab">
                        <div class="form-group mb-3">
                            <label for="exampleInputFile">Upload Product Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="images[]" class="custom-file-input" multiple id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                @if ($product->image)
                                    <div class="row">
                                        @foreach($product->image as $image)
                                        <div class="col-sm-2 text-center">
                                            <figure style="position: relative; margin: 0">
                                                <img src="{{ asset($image->image) }}" style="width:80px; height:80px" class="border mb-2" alt="Img">
                                                <a href="{{ url('product/product-image/delete/'.$image->id) }}" class="fas fa-times" style="position: absolute; border-radius: 50%; font-size: 0.8rem; width: 1rem; height: 1rem; line-height: 1rem; background-color: #fff; box-shadow: 0 2px 6px 0 rgb(0 0 0 / 40%); margin-left: -10px" title="Remove"></a>
                                            </figure>
                                        </div>
                                        @endforeach
                                    </div>   
                                @else
                                    <h5>No Image Added</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2()

        $('#summernote').summernote()
        $('#summernote2').summernote()

        bsCustomFileInput.init();

        var i = 1;
        $('#addRow').click(function() {
            i++;
            $('#dynamicadd').append('<tr id="row'+i+'"><td><select class="form-control" name="product_color_id[]"><option></option> @foreach ($colors as $color)<option value="{{$color->id}}">{{$color->name}}</option> @endforeach </select></td><td><select class="form-control" name="product_size_id[]"><option></option> @foreach ($sizes as $size)<option value="{{$size->id}}">{{$size->name}}</option> @endforeach </select></td><td><input type="text" name="quantity[]" class="form-control text-center"></td><td><input type="text" name="price2[]" class="form-control text-center"></td><td><button type="button" id="'+i+'" class="btn btn-danger deleteRow">-</button></td></tr>');
        });
        $(document).on('click', '.deleteRow', function() {
            var row_id = $(this).attr('id');
            $('#row' + row_id + '').remove();
        });
    })
</script>

@endsection