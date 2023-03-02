@extends('layouts.main-front')

@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{ url('/') }}">Home</a>
                <a class="breadcrumb-item text-dark" href="{{ url('/shop') }}">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="mb-5 col-lg-8 table-responsive">
            <table class="table mb-0 text-center table-light table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @forelse(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{ $id }}">
                                <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> {{ $details['product_name'] }}</td>
                                <td class="align-middle">₦{{ $details['price'] }}</td>
                                <td class="align-middle">
                                    <input type="number" value="{{ $details['quantity'] }}" class="text-center border-0 form-control form-control-sm bg-secondary quantity update-cart" />
                                </td>
                                <td class="align-middle">₦{{ $details['price'] * $details['quantity'] }}</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger remove-from-cart"><i class="fa fa-times"></i></button></td>
                            </tr>
                        @empty
                            <h1>Cart Empty</h1>
                        @endforelse
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="p-4 border-0 form-control" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="mb-3 section-title position-relative text-uppercase"><span class="pr-3 bg-secondary">Cart Summary</span></h5>
            <div class="mb-5 bg-light p-30">
                <div class="pb-2 border-bottom">
                    {{-- <div class="mb-3 d-flex justify-content-between">
                        <h6>Subtotal</h6>
                        @forelse (session('cart') as $id => $details)
                            <h6>₦{{ $details['price'] * $details['quantity'] }}</h6>
                        @empty
                            <h6>₦0</h6>
                        @endforelse

                    </div> --}}
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">₦10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="mt-2 d-flex justify-content-between">
                        <h5>Total</h5>
                        <h5>₦{{ $total }}</h5>
                    </div>
                    <button class="py-3 my-3 btn btn-block btn-primary font-weight-bold">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection
