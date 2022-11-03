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

        <form action="{{route('create-new.product')}}" method="post">
            @csrf
            <div class="card-body">
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
                            <label>Status</label>
                            <select class="form-control" name="status_id">
                                <option></option>
                                @foreach ($status as $item)
                                    <option value="{{$item->id}}"
                                        @if($item->id == old('status_id')) 
                                            selected 
                                        @endif
                                        >
                                        {{$item->status_name}}
                                    </option>
                                @endforeach
                            </select>

                            @error('status_id')
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
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection