<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        @foreach($categories as $k=> $v)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ url('/category') }}/{{$v->slug}}">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        @if($v->image)
                        <img style="height: 100%;object-fit: cover;" class="img-fluid" src="{{ $v->image}}" alt="">
                        @endif
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{$v->name}}</h6>
                        <small class="text-body">{{$v->prod}} Products</small>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- Categories End -->