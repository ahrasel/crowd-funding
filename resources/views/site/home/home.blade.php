<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.home.partials.home-head')
</head>

<body>

<!-- Menu -->
@include('site.home.partials.home-nav')
<!-- Menu end -->

<!-- Slider -->
@include('site.home.partials.home-slider')
<!-- Slider end. -->


<section>
    <div class="jumbotron jumbotron-fluid" style=" background:none">
        <div class="container" style="text-align:center">
            <h2>VERIFIED CAMPAIGN</h2>
            <p>View the fundraisers that are most active right now</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">

            <div class="row" style="text-align: center; margin-bottom:20px">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('site/images/1519704422wozw6-food.jpg') }}"
                             alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Food & Hunger</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been</p>
                            <h6 style="color: green">Goal: ৳ 3,500,000.00</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                     style="width:90%">90%
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('site/images/15195664392ir25-health.jpg') }}"
                             alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Health</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been</p>
                            <h6 style="color: green">Goal: ৳ 3,500,000.00</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                     style="width:75%">75%
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top"
                             src="{{ asset('site/images/1519566219sixwh-graduation-ceremony.jpg') }}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Education</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been</p>
                            <h6 style="color: green">Goal: ৳ 3,500,000.00</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                     style="width:85%">85%
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: center; margin-bottom:20px">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('site/images/Fotolia_94973018_S.jpg') }}"
                             alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Business</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been</p>
                            <h6 style="color: green">Goal: ৳ 1,50,000.00</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                     style="width:50%">50%
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('site/images/download%20(1).jpeg') }}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Child & Old age care</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been</p>
                            <h6 style="color: green">Goal: ৳ 3,00,000.00</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                     style="width:70%">70%
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('site/images/th.jpeg') }}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Personal Crisis</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been</p>
                            <h6 style="color: green">Goal: ৳ 1,00,000.00</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                     style="width:60%">60%
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="jumbotron jumbotron-fluid" style="margin-bottom:0px">
        <div class="container" style="text-align:center">
            <h2>HOW IT WORK</h2>
            <p>How way you can get Fundting to this Website</p>
        </div>
    </div>
    <div class="container-fluid" style="background:#e9ecef;padding-bottom:50px">
        <div class="container">
            <div class="row" style="text-align: center">
                <div class="col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fas fa-edit"></i></a>
                    <h4>Create</h4>
                    <p>Create a campaign to raise funds for your cause.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fas fa-share"></i></a>
                    <h4>Share</h4>
                    <p>Share it on all social media platforms, we mean, ALL!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fas fa-dollar-sign"></i></a>
                    <h4>Fund</h4>
                    <p>Receive donations to your cause direct to your account.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="jumbotron jumbotron-fluid" style="margin-bottom:0px; background:none">
        <div class="container" style="text-align:center">
            <h2>ALL FEATURED CAMPAIGN RIGHT NOW</h2>
            <p>Raise more money and change more lives with Oporajoy.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" style="text-align:center">

            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Accident & Persional Crisis</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Children</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Community</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Creative</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Education</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Environment</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Food & Hunger</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">Healh</a>
            </div>
            <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1">
                <a href="#">View all fundraiser</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('site.home.partials.home-footer')
<!-- Footer end -->


</body>
</html>


{{--
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
 top slider start
@include('site.home/partials/home-slider')
 top slider end

<h1>This For Client Test</h1>

@endsection--}}
