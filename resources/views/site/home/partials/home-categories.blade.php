<section class="mb-5">
    <div class="jumbotron jumbotron-fluid" style="margin-bottom:0px; background:none">
        <div class="container" style="text-align:center">
            <h2>ALL FEATURED CAMPAIGN RIGHT NOW</h2>
            <p>Raise more money and change more lives with Oporajoy.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="text-align:center">
            @foreach($campaignCategories as $category)
            <div class="col-sm-3">
                <div class="text-center">
                    @if($category->image != null)
                    <img src="{{ asset("uploads/$category->image") }}" class="img-fluid pb-1"
                        style="height: 300px; width: 300px">
                    @else
                    <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1"
                        style="height: 300px; width: 300px">
                    @endif
                    <a href="#"></a>
                </div>
                <h5 class="font-weight-bold text-primary">{{ $category->name }}</h5>
            </div>
            @endforeach
        </div>
    </div>
</section>