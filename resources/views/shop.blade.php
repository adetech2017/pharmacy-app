@extends('layouts.main-front')

@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{ url('/') }}">Home</a>
                <a class="breadcrumb-item text-dark" href="{{ url('shop') }}">Shop</a>
                <span class="breadcrumb-item active">Shop List</span>
            </nav>
        </div>
    </div>
</div>


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
            <!-- Price Start -->
            <h5 class="mb-3 section-title position-relative text-uppercase"><span class="pr-3 bg-secondary">Filter by price</span></h5>
            <div class="p-4 bg-light mb-30">
                <form>
                    <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <span class="border badge font-weight-normal">1000</span>
                    </div>
                    <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-1">
                        <label class="custom-control-label" for="price-1">₦0 - ₦100</label>
                        <span class="border badge font-weight-normal">150</span>
                    </div>
                    <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-2">
                        <label class="custom-control-label" for="price-2">₦100 - ₦200</label>
                        <span class="border badge font-weight-normal">295</span>
                    </div>
                    <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-3">
                        <label class="custom-control-label" for="price-3">₦200 - ₦300</label>
                        <span class="border badge font-weight-normal">246</span>
                    </div>
                    <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-4">
                        <label class="custom-control-label" for="price-4">₦300 - ₦400</label>
                        <span class="border badge font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-5">
                        <label class="custom-control-label" for="price-5">₦400 - ₦500</label>
                        <span class="border badge font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Price End -->

        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="pb-3 row">
                <div class="pb-1 col-12">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="ml-2 btn btn-sm btn-light"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="ml-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                            <div class="ml-2 btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($product as $result)
                    <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
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
                <div class="col-12">
                    <nav class="pagination justify-content-center">
                        {!! $product->links() !!}
                    </nav>
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

@endsection
