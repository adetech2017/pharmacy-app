@extends('layouts.main-front')

@section('content')

<!-- Carousel Start -->
<div class="mb-3 container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontEnd/img/carousel1.jpeg') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                {{-- <h1 class="mb-3 text-white display-4 animate__animated animate__fadeInDown">Men Fashion</h1> --}}
                                {{-- <p class="px-5 mx-md-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p> --}}
                                <a class="px-4 py-2 mt-3 btn btn-outline-light animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontEnd/img/carousel2.png') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                {{-- <h1 class="mb-3 text-white display-4 animate__animated animate__fadeInDown">Women Fashion</h1>
                                <p class="px-5 mx-md-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p> --}}
                                <a class="px-4 py-2 mt-3 btn btn-outline-light animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontEnd/img/carousel3.jpeg') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                {{-- <h1 class="mb-3 text-white display-4 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                <p class="px-5 mx-md-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p> --}}
                                <a class="px-4 py-2 mt-3 btn btn-outline-light animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30 bg-success" style="height: 200px;">
                <div class="offer-text">
                    <h3 class="mb-3 text-white">Are you stranded?</h3>
                    <h6 class="text-white">Within a few clicks, find pharmacy accessible near you</h6>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30 bg-success" style="height: 200px;">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="mb-3 nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Delivery</button>
                            <button class="mb-3 nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>Pickup</button>
                        </div>
                    </nav>
                    <div class="mt-3 tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form class="row gx-2 gy-2 align-items-center">
                                <div class="col">
                                    <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                        <label class="visually-hidden" for="inputDelivery">Address</label>
                                        <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                                    </div>
                                </div>
                                <div class="gap-3 d-grid col-sm-auto">
                                    <button class="btn btn-danger" type="submit">Find Pharmacy</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form class="row gx-4 gy-2 align-items-center">
                                <div class="col">
                                    <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                        <label class="visually-hidden" for="inputPickup">Address</label>
                                        <input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text" placeholder="Enter Your Address" />
                                    </div>
                                </div>
                                <div class="gap-3 d-grid col-sm-auto">
                                    <button class="btn btn-danger" type="submit">Find Pharmacy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class="pt-5 container-fluid">
    <div class="pb-3 row px-xl-5">
        <div class="pb-1 col-lg-3 col-md-6 col-sm-12">
            <div class="mb-4 d-flex align-items-center bg-light" style="padding: 30px;">
                <h1 class="m-0 mr-3 fa fa-check text-success"></h1>
                <h5 class="m-0 font-weight-semi-bold">Quality Product</h5>
            </div>
        </div>
        <div class="pb-1 col-lg-3 col-md-6 col-sm-12">
            <div class="mb-4 d-flex align-items-center bg-light" style="padding: 30px;">
                <h1 class="m-0 mr-2 fa fa-shipping-fast text-success"></h1>
                <h5 class="m-0 font-weight-semi-bold">Uptime Delivery</h5>
            </div>
        </div>
        <div class="pb-1 col-lg-3 col-md-6 col-sm-12">
            <div class="mb-4 d-flex align-items-center bg-light" style="padding: 30px;">
                <h1 class="m-0 mr-3 fas fa-exchange-alt text-success"></h1>
                <h5 class="m-0 font-weight-semi-bold">14-Day Return</h5>
            </div>
        </div>
        <div class="pb-1 col-lg-3 col-md-6 col-sm-12">
            <div class="mb-4 d-flex align-items-center bg-light" style="padding: 30px;">
                <h1 class="m-0 mr-3 fa fa-phone-volume text-success"></h1>
                <h5 class="m-0 font-weight-semi-bold">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
{{-- <div class="pt-5 container-fluid">
    <h2 class="mb-4 section-title position-relative text-uppercase mx-xl-5"><span class="pr-3 bg-secondary">Categories</span></h2>
    <div class="pb-3 row px-xl-5">
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
            <a class="text-decoration-none" href="">
                <div class="mb-4 cat-item img-zoom d-flex align-items-center">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-fill">
                        <h6>Category Name</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div> --}}
<!-- Categories End -->

<!-- Products Start -->
<div class="pt-5 pb-3 container-fluid">
    <h2 class="mb-4 section-title position-relative text-uppercase mx-xl-5"><span class="pr-3 bg-secondary">Featured Products</span></h2>
    <div class="row px-xl-5">
        @foreach ($product as $result)
            <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
                <div class="mb-4 product-item bg-light">
                    <div class="overflow-hidden product-img position-relative">
                        <img class="w-100" src="{{ asset('products')}}/{{ $result->image }}" alt="{{$result->product_name}}" height="301px" width="301px">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="{{ route('add.to.cart', $result->id) }}"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <a class="h6 text-decoration-none text-truncate" href="{{ url('product-details')}}/{{ $result->slug }}">{{$result->product_name}}</a>
                        <div class="mt-2 d-flex align-items-center justify-content-center">
                            <h5>₦{{$result->price}}.00</h5>
                        </div>
                        <div class="mb-1 d-flex align-items-center justify-content-center">
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="pt-5 pb-3 container-fluid">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="mb-3 text-white">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="mb-3 text-white">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Products Start -->
<div class="pt-5 pb-3 container-fluid">
    <h2 class="mb-4 section-title position-relative text-uppercase mx-xl-5"><span class="pr-3 bg-secondary">Recent Products</span></h2>
    <div class="row px-xl-5">
        @foreach ($latest as $result)
            <div class="pb-1 col-lg-3 col-md-4 col-sm-6">
                <div class="mb-4 product-item bg-light">
                    <div class="overflow-hidden product-img position-relative">
                        <img class="w-100" src="{{ asset('products')}}/{{ $result->image }}" alt="{{$result->product_name}}" height="301px" width="301px">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <a class="h6 text-decoration-none text-truncate" href="{{ url('product-details')}}/{{ $result->slug }}">{{$result->product_name}}</a>
                        <div class="mt-2 d-flex align-items-center justify-content-center">
                            <h5>₦{{$result->price}}.00</h5>
                        </div>
                        <div class="mb-1 d-flex align-items-center justify-content-center">
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small class="mr-1 fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Products End -->

@endsection
