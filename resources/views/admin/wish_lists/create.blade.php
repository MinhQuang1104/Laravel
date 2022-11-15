@extends('layouts.master')

@section('header-content')
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0">Wish List Page</h1>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('index.wish-list')}}">Wish List</a></li>
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
            <h3 class="card-title">Create New Wish List</h3>
        </div>

        <form action="{{route('create-new.wish-list')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Product name</label>
                            <select class="form-control" name="product_id">
                                <option></option>
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}"
                                        @if($product->id == old('product_id')) 
                                            selected 
                                        @endif
                                        >
                                        {{$product->name}}
                                    </option>
                                @endforeach
                            </select>

                            @error('product_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" name="status" value="{{ old('status') }}" placeholder="Enter ...">
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