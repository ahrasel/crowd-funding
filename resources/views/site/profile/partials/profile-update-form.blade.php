<div class="card mb-5">
    <div class="card-body">
        <form action="{{ route('site.profile-update', [$user->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name"
                            aria-describedby="first_name" placeholder="name" value=" {{ $user->first_name }} ">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="email"
                            placeholder="name" value=" {{ $user->email }} ">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" aria-describedby="mobile"
                            placeholder="name" value=" {{ $user->mobile }} ">
                    </div>

                    <div class="form-group">
                        <label for="nid">NID</label>
                        <input type="text" class="form-control" name="nid" id="nid" aria-describedby="nid"
                            placeholder="name" value=" {{ $user->nid }} ">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            aria-describedby="last_name" placeholder="name" value=" {{ $user->last_name }} ">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username"
                            aria-describedby="username" placeholder="name" value=" {{ $user->username }} " disabled>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone"
                            placeholder="name" value=" {{ $user->phone }} ">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" aria-describedby="dob"
                            placeholder="name" value=" {{ $user->dob }} ">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="address"
                            aria-describedby="address" rows="3">{{ $user->address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" placeholder="image"
                            aria-describedby="image">
                    </div>
                </div>

                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>
