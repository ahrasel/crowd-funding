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
                        @if($campaign->documents != null)
                            <img src="{{ asset("uploads/$campaign->documents") }}" class="card-img-top" >
                        @else
                            <img src="{{ asset('site/images/accident-helpline.png') }}" class="card-img-top" >
                        @endif

                        <div class="card-body">
                            <h4 class="card-title">{{ $campaign->title }}</h4>
                            <p class="card-text">{{ substr($campaign->description, 0,100) }}...</p>
                            <h6 style="color: green">Goal: ৳ {{ $campaign->target_amount }}</h6>

                            @php
                                $percent = ($campaign->collected_amount / $campaign->target_amount) * 100;
                            @endphp
                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger "
                                    style="width:{{ $percent }}%">{{ $percent }}%
                                </div>
                            </div>

                            <a href="{{ route('site.show-campaign', ['campaign' =>$campaign->id]) }}" class="btn btn-primary" style="margin-top: 20px">Donate Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>