@extends('layouts.master')

@section('header-content')
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Discount Type Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.discount-type') }}">Discount Type</a></li>
                    <li class="breadcrumb-item active">Edit Discount Type</li>
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
            <h3 class="card-title">Edit Discount Type</h3>
        </div>

        <form action="{{ route('update.discount-type', [$discount_type->id]) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Type name</label>
                    <input type="text" class="form-control" name="type_name" value="{{ $discount_type->type_name }}" placeholder="Enter ...">
                            
                    @error('type_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection