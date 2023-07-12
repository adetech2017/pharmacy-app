@extends('layouts.main_pharmacy')

@section('content')

<div class="mb-3">
    <h1 class="align-middle h3 d-inline">All Products</h1>
</div>
<div class="card">
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    {{ session()->get('message') }}
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul class="alert-message">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table id="datatables-orders" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Batch Number</th>
                    <th>Category</th>
                    <th>Expire Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                    $date_now = date("Y-m-d");
                @endphp
                @foreach ($product as $result)
                    <tr>
                        <td><strong>#{{ $i++ }}</strong></td>
                        <td>{{$result->product_name}}</td>
                        <td>₦{{$result->price}}</td>
                        <td>{{$result->quantity}}</td>
                        <td>{{$result->batch_number}}</td>
                        <td>
                            <span class="text-white badge bg-info ms-2">
                                {{$result->category['category_name']}}
                            </span>
                        </td>
                        <td>
                            @if($date_now > $result->expiry_date)
                                <span class="text-white badge bg-danger ms-2">
                                    Expired
                                </span>
                            @else
                                <span class="text-white badge bg-success ms-2">
                                    {{$result->expiry_date}}
                                </span>
                            @endif
                        <td>
                            <a href="{{ route('product.edit',$result->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            {{-- <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
