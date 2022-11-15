@extends('layouts.master')

@section('header-content')
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Category Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('index.category')}}">Category</a></li>
                    <li class="breadcrumb-item active">Edit Category</li>
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
            <h3 class="card-title">Create New Category</h3>
        </div>

        <form action="{{ route('update.category', [$category->id]) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Enter ...">
                            
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $category->quantity }}" placeholder="Enter ...">

                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ...">{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection