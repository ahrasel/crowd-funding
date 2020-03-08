@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact Query Details</h4>
                </div>
                <div class="card-body">
                    <p class="m-0 p-0">Full Name: <strong> {{ $contactQuery->first_name }}
                            {{ $contactQuery->last_name }} </strong></p>
                    <p class="m-0 p-0">Email: <strong> {{ $contactQuery->email }} </strong></p>
                    <p class="m-0 p-0">Subject: <strong> {{ $contactQuery->subject }} </strong></p>
                    {{-- <hr> --}}
                    <h4 class="mt-4">Message</h4>
                    <hr>
                    <p>{{ $contactQuery->subject }}</p>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h4>All Replies</h4>
                </div>
                <div class="card-body">

                    @foreach ($contactQuery->replies as $replay)
                    <div class="media mb-3">
                        <img src="{{ asset('site/img/solid.jpg') }}" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $replay->first_name }} {{ $replay->last_name }}</h5>
                            {{ $replay->message }}
                        </div>
                    </div>
                    @endforeach


                </div>

                <div class="card-footer">
                    <form action=" {{ route('contact-queries.update', ['contact_query' => $contactQuery->id]) }} "
                        method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="replay_message">Send Replay</label>
                            <textarea class="form-control" name="replay_message" id="replay_message"
                                rows="2"></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <div class="text-right">
                                <a class="btn btn-danger" href="{{ route('contact-queries.index') }}" role="button"><i
                                        class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                <button type="submit" class="btn btn-primary">Replay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
