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
                @foreach($campaigns as $campaign)
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('site/images/1519704422wozw6-food.jpg') }}"
                                 alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">{{ $campaign->title }}</h4>
                                <p class="card-text">{{ $campaign->description }}</p>
                                <h6 style="color: green">Goal: ৳ {{ $campaign->target_amount }}</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                         style="width:90%">90%
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                            </div>
                        </div>
                </div>
                @endforeach
        </div>
    </div>
</section>
