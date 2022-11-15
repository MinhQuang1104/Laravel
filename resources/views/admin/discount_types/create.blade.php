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
            <h3 class="card-title">Create New Discount Type</h3>
        </div>

        <form action="{{ route('create-new.discount-type') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Type name</label>
                    <input type="text" class="form-control" name="type_name" value="{{ old('type_name') }}" placeholder="Enter ...">
                            
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