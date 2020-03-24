@if (file_exists(public_path().'/uploads/'.$image) && $image)
<img src="{{ asset('uploads/'.$image) }}" class="rounded float-left" style="height: 40px">
@endif
