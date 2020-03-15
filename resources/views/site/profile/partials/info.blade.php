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
                    <p class="m-0 p-0">{{ $user->username ?? 'NA' }}</p>
                </div>
                <div class="col-sm-4 mb-3">
                    <h6 class="m-0 p-0">Email</h6>
                    <p class="m-0 p-0">{{ $user->email ?? 'NA' }}</p>
                </div>
                <div class="col-sm-4 mb-3">
                    <h6 class="m-0 p-0">Date Of Birth</h6>
                    <p class="m-0 p-0">{{ $user->dob ?? 'NA' }}</p>
                </div>

                <div class="col-sm-4 mb-3">
                    <h6 class="m-0 p-0">Phone</h6>
                    <p class="m-0 p-0">{{ $user->phone ?? 'NA' }}</p>
                </div>
                <div class="col-sm-4 mb-3">
                    <h6 class="m-0 p-0">Mobile</h6>
                    <p class="m-0 p-0">{{ $user->mobile ?? 'NA' }}</p>
                </div>
                <div class="col-sm-4 mb-3">
                    <h6 class="m-0 p-0">NID</h6>
                    <p class="m-0 p-0">{{ $user->nid ?? 'NA' }}</p>
                </div>

                <div class="col-sm-12 mb-3">
                    <h6 class="m-0 p-0">Address</h6>
                    <p class="m-0 p-0">{{ $user->address ?? 'NA' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
