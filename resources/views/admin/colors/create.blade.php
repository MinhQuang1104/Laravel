@extends('layouts.master')

@section('header-content')
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product Color Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.color') }}">Product Color</a></li>
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
            <h3 class="card-title">Create New Product Color</h3>
        </div>

        <form action="{{ route('create-new.color') }}" method="post">
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
                            <label>Color</label>
                            <div class="input-group" id="colorpicker">
                                <input type="text" class="form-control" name="color" value="{{ old('color') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-square"></i></span>
                                </div>

                                @error('color')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#colorpicker').colorpicker()

        $('#colorpicker').on('colorpickerChange', function(event) {
            $('#colorpicker .fa-square').css('color', event.color.toString());
        })
    })
</script>
@endsection

