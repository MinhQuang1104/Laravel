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
                <li class="breadcrumb-item"><a href="{{route('index.staff')}}">Staff</a></li>
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
            <h3 class="card-title">Create New User</h3>
        </div>

        <form action="{{route('create-new.staff')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="Enter ...">

                            @error('firstname')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Enter ...">

                            @error('lastname')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">

                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter Password">

                    @error('password')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter Phone number">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection