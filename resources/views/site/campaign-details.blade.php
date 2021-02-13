@extends('site.layouts/master')


@section('contents')
<section class="mx-5 my-2">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $campaign->title }}</h5>
            <p class="card-text">{{ $campaign->description }}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <img src="{{ asset("uploads/$campaign->documents") }}" class="card-img-top" alt="...">
    </div>

    <div class="card mb-3">
        @auth
        <div class="card-body">
            <h5 class="card-title">Donate Now</h5>
        </div>

        <form class="mx-5 my-2" method="POST" action="{{ route('site.save-donation') }}">
            @csrf

            <input type="hidden" name="campaign_id" value="{{ $campaign->id }}">

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="amount" id="inputEmail3" min="0">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Note</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="note" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary">Donate Now</button>
                </div>
            </div>
        </form>
        @else
        <div class="mx-5 my-2">
            <h3>Please login for Donate</h3>
            <a href="{{ route('login') }}">Click here to login</a>
        </div>
        @endauth

    </div>
</section>
@endsection