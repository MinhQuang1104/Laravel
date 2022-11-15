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
                        <th style="width: 10px">#</th>
                        <th>Product Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($wish_lists as $wish_list)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$wish_list->product->name}}</td>
                        <td>{{$wish_list->status}}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('edit.wish-list', [$wish_list->id]) }}">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('delete.wish-list', [$wish_list->id]) }}">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
</div>
@endsection