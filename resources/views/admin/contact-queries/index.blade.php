@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4>All Contact Queries</h4>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN #</th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contactQueries as $contactQuery)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$contactQuery->first_name}} {{ $contactQuery->last_name }} </td>
                                <td>{{$contactQuery->email}}</td>
                                <td>{{$contactQuery->subject}}</td>
                                <td>{{$contactQuery->message}}</td>

                                <td>
                                    <div class="d-inline-flex">
                                        <a class="btn btn-primary mr-2"
                                            href="{{ route('contact-queries.show', ['contact_query' => $contactQuery->id]) }}"
                                            role="button"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <form
                                            action="{{ route('contact-queries.destroy', ['contact_query' => $contactQuery->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
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
