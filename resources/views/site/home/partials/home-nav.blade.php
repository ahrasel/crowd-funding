<section>
    <div class="container-fluid" style="background:#212F3C ">
        <div class="container ">
            <div class="row" style="color: white;">
                <div class="col-lg-4 col-md-4 col-12" style=" color: white; padding-top: 15px;">
                    <ul>
                        <li style="display: inline-block; padding: 8px">
                            <a href="#" style="color:white"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li style="display: inline-block; padding: 8px">
                            <a href="#" style="color:white"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li style="display: inline-block; padding: 8px">
                            <a href="#" style="color:white"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li style="display: inline-block; padding: 8px">
                            <a href="#" style="color:white"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-12" style="padding-top:25px">
                    <ul style="font-size:12px">
                        <li style="display: inline-block ; padding-right: 3px">
                            <a href="#" style="color:white">+0880-xxxxxxx</a>
                        </li>
                        <li style="display: inline-block; padding-right: 3px"> Sun-Thu 10:00AM to 05:00PM</li>
                        <li style="display: inline-block"> supportcrd.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-12" style="padding:15px">
                    <a href="{{ route('login') }}" class="btn btn-primary  btn-sm">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary  btn-sm">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid" style="background:#34495E ">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand" href="index.php">Crowd_Funding</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.how-it-work') }}">How it Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.contact') }}">Contact Us</a>
                        </li>


                    </ul>
                    <form class="form-inline my-2 my-lg-0 ml-3">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</section>
