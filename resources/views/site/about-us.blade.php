@extends('site.layouts/master')

@section('headerStyles')
<style>
</style>
@endsection

@section('contents')
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="text-center">
                <h3>Meet With Our Team</h3>
                <p>the right people for you</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="text-center">
                <img src="{{ asset('site/img/girl-1.jpg') }}" alt="team image">
                <div class="mt-2">
                    <h5 class="text-capitalize m-0">Jvictoria Doe</h5>
                    <p class="m-0">Founder</p>
                    <span class="m-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-youtube" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="text-center">
                <img src="{{ asset('site/img/girl-2.jpg') }}" alt="team image">
                <div class="mt-2">
                    <h5 class="text-capitalize m-0">Alice Kim</h5>
                    <p class="m-0">Co-Founder</p>
                    <span class="m-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-youtube" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="text-center">
                <img src="{{ asset('site/img/men-2.jpg') }}" alt="team image">
                <div class="mt-2">
                    <h5 class="text-capitalize m-0">Jhon Smith</h5>
                    <p class="m-0">Manager</p>
                    <span class="m-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                    <span class="m-2"><i class="fa fa-youtube" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-sm-12 mt-5" style="min-height: 150px; background-color: rgb(90, 107, 121) !important;">
        <div class=" text-center mt-5 text-white">
            <h5 class="text-capitalize ">Crowd Funding</h5>
            <span class="m-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
            <span class="m-2"><i class="fa fa-twitter" aria-hidden="true"></i></span>
            <span class="m-2"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
            <span class="m-2"><i class="fa fa-youtube" aria-hidden="true"></i></span>
        </div>
        <div class="text-center inline mt-2">
            <a class="p-4 text-white text-decoration-none" href="{{ route('site.home') }}"><i class="fa fa-home"
                    aria-hidden="true"></i>
                Home</a>
            <a class="p-4 text-white text-decoration-none" href="{{ route('site.about-us') }}"><i
                    class="fa fa-address-book" aria-hidden="true"></i> About</a>
            <a class="p-4 text-white text-decoration-none" href="{{ route('site.contact') }}"><i class="fa fa-tasks"
                    aria-hidden="true"></i>
                Contact</a>
        </div>
    </div>
</div>

@endsection
