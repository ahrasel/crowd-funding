@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4>All Campaigns</h4>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN #</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($campaigns as $campaign)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$campaign->title}} </td>
                                <td>{{$campaign->description}}</td>

                                <td>
                                    <div class="d-inline-flex">
                                        <a class="btn btn-primary mr-2"
                                            href="{{ route('admin-campaigns.show', ['admin_campaign' => $campaign->id]) }}"
                                            role="button"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>

                                        <!-- IconButton: Delete -->
                                        <form
                                            action="{{ route('admin-campaigns.destroy', ['admin_campaign' => $campaign->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        <!-- IconButton: Delete End. -->

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