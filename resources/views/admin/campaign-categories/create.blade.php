@extends('admin.layouts.master')

@section('headerStyles')
<style>
    .container-center {
        position: absolute;
        float: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .card-header {
        background-color: #fff;
    }
</style>
@endsection

@section('content')
<div class="container container-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Category</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('campaign-categories.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="name"
                                aria-describedby="name">

                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" name="image" id="image" placeholder="image"
                                aria-describedby="image">

                        </div>

                        <div class="form-group mb-0">
                            <div class="text-right">
                                <a class="btn btn-danger" href="{{ route('campaign-categories.index') }}"
                                    role="button"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
