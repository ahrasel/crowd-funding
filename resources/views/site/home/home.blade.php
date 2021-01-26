@extends('site.layouts/master')
@section('contents')
    <!-- Slider -->
    @include('site.home.partials.home-slider')
    <!-- Slider end. -->

    @include('site.home.partials.verified-campaign')
    
    @include('site.home.partials.home-how-it-work')
    
    @include('site.home.partials.categories')
@endsection