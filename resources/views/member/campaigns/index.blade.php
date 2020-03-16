@extends('member.layouts.master')

{{-- @section('headerStyles')
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
@endsection --}}

@section('content')
<div class="container container-center">
    <div class="row justify-content-center">

        @foreach ($campaigns as $campaign)
        <div class="col-sm-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <!-- TODO:: handle image show -->
                        <img src="https://images.pexels.com/photos/3825011/pexels-photo-3825011.jpeg?cs=srgb&dl=woman-in-black-coat-standing-on-snow-covered-ground-3825011.jpg&fm=jpg"
                            class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $campaign->title }}

                                @if ($campaign->is_authenticated && !$campaign->is_close)
                                <span class="badge badge-success">Active</span>
                                @endif

                                @if ($campaign->is_authenticated && $campaign->is_close)
                                <span class="badge badge-danger">Close</span>
                                @endif

                                @if (!$campaign->is_authenticated && !$campaign->is_close)
                                <span class="badge badge-warning">Pending</span>
                                @endif

                            </h5>

                            <div class="text-justify" style="min-height: 65px;">
                                <p class="card-text m-0">{{substr($campaign->description, 0, 75)}} ...... </p>
                            </div>

                            <p class="card-text mb-1">
                                <small class="text-muted">{{ $campaign->category->name ?? '' }}</small>
                            </p>

                            <div class="row justify-content-between">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-success">
                                        Raised <span class="badge badge-light">&#2547;
                                            {{ $campaign->raised_amount ?? 0 }}</span>
                                    </button>
                                </div>

                                <div class="col-sm-4 mr-4">
                                    <button type="button" class="btn btn-warning">
                                        Goal <span class="badge badge-light">&#2547;
                                            {{ $campaign->target_amount }}</span>
                                    </button>
                                </div>
                            </div>

                            <div class="text-right mt-1">
                                <a class="btn btn-link"
                                    href="{{ route('campaigns.show', ['campaign' => $campaign->id]) }}"
                                    role="button">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection
