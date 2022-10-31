@extends('layouts.master')

@section('header-content')
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0">Staff Page</h1>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Staff Page</li>
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
                    <a href="{{route('create')}}" class="btn btn-primary btn-block">Create New</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone number</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($staffs as $staff)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$staff->lastname . ' ' . $staff->firstname}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->address}}</td>
                        <td>{{$staff->phone_number}}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{route('edit', [$staff->id])}}">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete', [$staff->id])}}">
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