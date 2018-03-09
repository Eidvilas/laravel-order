@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                @if($errors->has('file'))
                    <small class="alert alert-danger">
                        {{ $errors->first('file') }}
                    </small>
                @endif
                @if (Session::has('error'))
                    <small class="alert alert-danger">
                        {{ Session::get('error') }}
                    </small>
                @endif
                @if (Session::has('success'))
                    <small class="alert alert-success">
                        {{ Session::get('success') }}
                    </small>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto mt-4">
                <form action="{{ route('products.import') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Import excel file</label>
                        <input type="file" class="form-control-file" name="file">
                        <input type="submit" value="Import">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection