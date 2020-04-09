@extends('site.layouts/master')

@section('headerStyles')
<style>
    .carousel-inner-text {
        position: absolute;
        left: 10rem;
        top: 12rem;
        color: #3c3c3c;
        font-size: 4em;
        line-height: .9;
        font-weight: bolder;
        text-transform: capitalize;
    }

    .carousel-inner-text p {}

    .carousel-inner-text p span {
        color: #ce7852;
    }
</style>
@endsection

@section('content')
{{-- top slider start --}}
@include('site.home/partials/home-slider')
{{-- top slider end --}}

<h1>This For Client Test</h1>

@endsection