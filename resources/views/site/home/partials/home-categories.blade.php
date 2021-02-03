<section>
    <div class="jumbotron jumbotron-fluid" style="margin-bottom:0px; background:none">
        <div class="container" style="text-align:center">
            <h2>ALL FEATURED CAMPAIGN RIGHT NOW</h2>
            <p>Raise more money and change more lives with Oporajoy.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="text-align:center">
            @foreach($campaignCategories as $category)
                <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:20px">
                    @if($category->image != null)
                        <img src="{{ asset("uploads/$category->image") }}" class="img-fluid pb-1" style="height: 250px; width: 400px">
                    @else
                        <img src="{{ asset('site/images/accident-helpline.png') }}" class="img-fluid pb-1" style="height: 250px; width: 400px">
                    @endif
                    <a href="#">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
