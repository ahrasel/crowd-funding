<div class="card mb-5">
    <div class="card-body">
        <form action="{{ route('site.password-update', [$user->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="current_password"
                            aria-describedby="current_password" placeholder="current password">
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" class="form-control" name="new_password" id="new_password"
                            aria-describedby="new_password" placeholder="new password">
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                            aria-describedby="confirm_password" placeholder="confirm password">
                    </div>

                </div>

                <div class="col-sm-7 text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>
