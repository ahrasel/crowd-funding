@extends('site.layouts/master')

@section('headerStyles')
<style>
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-10">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Update Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Change Password</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @include('site.profile/partials/info')
                </div>

                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include('site.profile/partials/profile-update-form')
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    @include('site.profile/partials/password-change-form')
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
