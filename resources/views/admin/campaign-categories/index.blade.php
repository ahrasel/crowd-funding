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
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4>Create New Category</h4>
                        </div>

                        <div class="col-4 text-right">
                            <a class="btn btn-primary" href="{{ route('campaign-categories.create') }}" role="button"><i
                                    class="fa fa-plus" aria-hidden="true"></i> Create New</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN #</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                {{-- only for serial number --}}

                                <td>{{$category->name}}</td>

                                <td>
                                    @include('_partials.table-image', ['image' => $category->image])
                                </td>
                                <td>{{$category->description}}</td>

                                <td>
                                    <form action="{{ route('campaign-categories.update', ['campaign_category' => $category->id]) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="CHANGE_STATUS">

                                        @if ($category->is_active)
                                        <button type="submit" name="changeStatus" class="btn btn-sm btn-primary">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </button>
                                        @else
                                        <button type="submit" name="changeStatus" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        @endif
                                    </form>

                                </td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a class="btn btn-primary mr-2"
                                            href="{{ route('campaign-categories.edit', ['campaign_category' => $category->id]) }}"
                                            role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <form
                                            action="{{ route('campaign-categories.destroy', ['campaign_category' => $category->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
