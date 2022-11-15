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
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Wish List Page</li>
              </ol>
          </div>
        </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <div>
                    <a href="{{ route('create.wish-list') }}" class="btn btn-primary btn-block">Create New</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $wish_list->status }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="">
                                <i class="fas fa-pencil-alt"></i> Quick View
                            </a>
                            <a class="btn btn-danger btn-sm" href="">
                                <i class="fas fa-trash"></i> Add To Cart
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
</div>
@endsection