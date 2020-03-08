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
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src=" {{ asset('site/img/girl-1.jpg') }} " class="img-fluid rounded-circle " alt=""
                                    style="height: 200px; width: 190px">
                                <h3 class="mt-3">{{ $user->first_name }} {{ $user->last_name }}</h3>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-4 mb-3">
                                        <h6 class="m-0 p-0">Username</h6>
                                        <p class="m-0 p-0">{{ $user->username ?? 'Not Assigned Yet' }}</p>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <h6 class="m-0 p-0">Email</h6>
                                        <p class="m-0 p-0">{{ $user->email ?? 'Not Assigned Yet' }}</p>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <h6 class="m-0 p-0">Date Of Birth</h6>
                                        <p class="m-0 p-0">{{ $user->dob ?? 'Not Assigned Yet' }}</p>
                                    </div>

                                    <div class="col-sm-4 mb-3">
                                        <h6 class="m-0 p-0">Phone</h6>
                                        <p class="m-0 p-0">{{ $user->phone ?? 'Not Assigned Yet' }}</p>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <h6 class="m-0 p-0">Mobile</h6>
                                        <p class="m-0 p-0">{{ $user->mobile ?? 'Not Assigned Yet' }}</p>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <h6 class="m-0 p-0">NID</h6>
                                        <p class="m-0 p-0">{{ $user->nid ?? 'Not Assigned Yet' }}</p>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <h6 class="m-0 p-0">Address</h6>
                                        <p class="m-0 p-0">{{ $user->address ?? 'Not Assigned Yet' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
</div>


@endsection
