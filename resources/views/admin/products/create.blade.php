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
                    <li class="breadcrumb-item active">Create New</li>
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
            <form action="{{route('create-new.product')}}" enctype="multipart/form-data" method="post">
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter ...">
                                    
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sku</label>
                                    <input type="text" class="form-control" name="sku" value="{{ old('sku') }}" placeholder="Enter ...">
        
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
                                    <input type="text" class="form-control" name="weight" value="{{ old('weight') }}" placeholder="Enter ...">
        
                                    @error('weight')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Dimension</label>
                                    <input type="text" class="form-control" name="dimension" value="{{ old('dimension') }}" placeholder="Enter ...">
        
                                    @error('dimension')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description" placeholder="Enter ...">{{ old('description') }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter ...">
        
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Old Price</label>
                                    <input type="text" class="form-control" name="old_price" value="{{ old('old_price') }}" placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="text" class="form-control" name="discount" value="{{ old('discount') }}" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Discount Type</label>
                                    <select class="form-control" name="discount_type_id">
                                        <option></option>
                                        @foreach ($discount_types as $discount_type)
                                            <option value="{{$discount_type->id}}"
                                                @if($discount_type->id == old('discount_type_id')) 
                                                    selected 
                                                @endif
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
                                    <input class="form-check-input" type="checkbox" name="hot" value="1">
                                    <label class="form-check-label">Hot</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="featured" value="1">
                                        <label class="form-check-label">Featured</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="wish" value="1">
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
                                    <select class="select2" multiple name="tag_id[]" data-placeholder="Select Tag" style="width: 100%;">
                                        @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}" 
                                                @if($tag->id == old('tag_id')) 
                                                    selected 
                                                @endif>
                                                {{$tag->name}}
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
                                    <input type="text" class="form-control" name="status" value="{{ old('status') }}" placeholder="Enter ...">
        
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
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}" 
                                                @if($categorie->id == old('category_id')) 
                                                    selected 
                                                @endif>
                                                {{$categorie->name}}
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
                                        <textarea id="summernote" name="size_guide" placeholder="Enter ...">{{ old('size_guide') }}</textarea>
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
                                        <textarea id="summernote2" name="additional_info" placeholder="Enter ...">{{ old('additional_info') }}</textarea>
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
                                    <tr>
                                        <td>
                                            <select class="form-control" name="product_color_id[]">
                                                <option></option>
                                                @foreach ($colors as $color)
                                                    <option value="{{$color->id}}" 
                                                        @if($color->id == old('product_color_id')) 
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
                                                        @if($size->id == old('product_size_id')) 
                                                            selected 
                                                        @endif>
                                                        {{$size->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" name="quantity[]" class="form-control text-center"></td>
                                        <td><input type="text" name="price2[]" class="form-control text-center"></td>
                                        <td><button type="button" id="0" class="btn btn-danger deleteRow">-</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-image" role="tabpanel" aria-labelledby="custom-tabs-four-image-tab">
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Product Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="images[]" class="custom-file-input" multiple id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2()

        $('#summernote').summernote()
        $('#summernote2').summernote()

        bsCustomFileInput.init();

        var i = 1;
        $('#addRow').click(function() {
            i++
            $('#dynamicadd').append('<tr id="row'+i+'"><td><select class="form-control" name="product_color_id[]"><option></option> @foreach ($colors as $color)<option value="{{$color->id}}" @if($color->id == old("product_color_id")) selected @endif>{{$color->name}}</option> @endforeach </select></td><td><select class="form-control" name="product_size_id[]"><option></option> @foreach ($sizes as $size)<option value="{{$size->id}}" @if($size->id == old("product_size_id")) selected @endif>{{$size->name}}</option> @endforeach </select></td><td><input type="text" name="quantity[]" class="form-control text-center"></td><td><input type="text" name="price2[]" class="form-control text-center"></td><td><button type="button" id="'+i+'" class="btn btn-danger deleteRow">-</button></td></tr>');
        });
        $(document).on('click', '.deleteRow', function() {
            var row_id = $(this).attr('id');
            $('#row' + row_id + '').remove();
        });
    })
</script>

@endsection

