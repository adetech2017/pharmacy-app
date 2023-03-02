@extends('layouts.main-front')

@section('content')


<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shop Detail</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Detail Start -->
<div class="pb-5 container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <div class="carousel-item active">
                        <img src="{{ asset('products')}}/{{ $product->image }}" alt="Image" height="521px" width="521px">
                    </div>
                    {{-- <div class="carousel-item">
                        <img class="w-100 h-100" src="img/product-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/product-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/product-4.jpg" alt="Image">
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="h-auto col-lg-7 mb-30">
            <div class="h-100 bg-light p-30">
                <h3>{{$product->product_name}}</h3>
                <div class="mb-3 d-flex">
                    <div class="mr-2 text-primary">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(99 Reviews)</small>
                </div>
                <h3 class="mb-4 font-weight-semi-bold">₦{{$product->price}}.00</h3>
                <p class="mb-4">{!!  Str::limit( strip_tags($product->description), 200 ) !!}</p>
                <div class="pt-2 mb-4 d-flex align-items-center">
                    <div class="mr-3 input-group quantity" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="text-center border-0 form-control bg-secondary" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="px-3 btn btn-primary"><i class="mr-1 fa fa-shopping-cart"></i> Add To
                        Cart</button>
                </div>
                <div class="pt-2 d-flex">
                    <strong class="mr-2 text-dark">Share on:</strong>
                    <div class="d-inline-flex">
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30">
                <div class="mb-4 nav nav-tabs">
                    <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                    <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        {!!$product->description !!}
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Additional Information</h4>

                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 review for {{$product->product_name}}</h4>
                                <div class="mb-4 media">
                                    <img src="img/user.jpg" alt="Image" class="mt-1 mr-3 img-fluid" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                        <div class="mb-2 text-primary">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="my-3 d-flex">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-0 form-group">
                                        <input type="submit" value="Leave Your Review" class="px-3 btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->


<!-- Products Start -->
<div class="py-5 container-fluid">
    <h2 class="mb-4 section-title position-relative text-uppercase mx-xl-5"><span class="pr-3 bg-secondary">You May Also Need</span></h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                @foreach ($random as $result)
                    <div class="product-item bg-light">
                        <div class="overflow-hidden product-img position-relative">
                            <img class="w-100" src="{{ asset('products')}}/{{ $result->image }}" alt="" height="301px" width="301px">
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
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

@endsection
