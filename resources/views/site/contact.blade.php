@extends('site.layouts/master')

@section('headerStyles')
<style>
</style>
@endsection

@section('contents')

<div class="container mt-5">
    <div class="row ">
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body">

                    @if (session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong> {{ session('status') }} </strong>
                    </div>
                    @endif

                    <script>
                        $(".alert").alert();
                    </script>

                    <h2>Get In Touch</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos bl </p>

                    <form action=" {{ route('site.contactStore') }} " method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="first name" aria-describedby="first_name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="last name" aria-describedby="last_name">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="email"
                                        aria-describedby="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="subject" aria-describedby="subject" required>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" id="message" rows="3"
                                        required></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h2>Our Office Information</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores suscipit, et corrupti nobis
                        officia quis porro hic rem labore unde temporibus asperiores. Voluptates alias harum corrupti
                        aspernatur itaque, magni ratione dolorum architecto earum qui aliquam ipsam quidem quae</p>
                    <div class="mt-2">
                        <h5 class="m-0"><i class="fa fa-location-arrow" aria-hidden="true"></i> Address</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="mt-2">
                        <h5 class="m-0"><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h5>
                        <p>0193475XXXX.</p>
                    </div>
                    <div class="mt-2">
                        <h5 class="m-0"><i class="fa fa-address-book" aria-hidden="true"></i> Email Address</h5>
                        <p>admin@email.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection