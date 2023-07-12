@extends('layouts.main_pharmacy')

@section('content')

<div class="mb-3">
    <h1 class="align-middle h3 d-inline">Imported Products</h1>
</div>
<div class="card">
    <div class="card-body">
        <div class="my-2 d-flex">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Import Data
            </button>
            <div class="col-md-5">
                <a href="{{URL::to('sample/product_sample_data.csv')}}" class="btn btn-primary"> Download sample</a>
            </div>
        </div>
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
                    <th>Status</th>
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
                        <td>{{$result->batch_number}}
                            {{-- <span class="text-white badge bg-info ms-2">
                                {{$result->category['category_name']}}
                            </span> --}}
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
                            <a href="{{ route('edit.product.import',$result->slug) }}" class="btn btn-primary btn-sm">Edit</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Product CSV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('product.import_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 input-group">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
