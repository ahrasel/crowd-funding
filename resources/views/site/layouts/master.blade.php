<!DOCTYPE html>
<html lang="en">

<head>
    @include('site.home.partials.home-head')
</head>

<body>

    <!-- Menu -->
    @include('site.home.partials.home-nav')
    <!-- Menu end -->

    @yield('contents')

    <!-- Footer -->
    @include('site.home.partials.home-footer')
    <!-- Footer end -->


</body>

</html>