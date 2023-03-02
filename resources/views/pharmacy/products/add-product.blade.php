@extends('layouts.main_pharmacy')

@section('content')

<div class="mb-3">
    <h1 class="align-middle h3 d-inline">Add Medicine</h1>
</div>
<div class="row">
    <div class="col-12 col-lg-10">
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
                <form method="POST" action="{{ route('add.product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input class="form-control form-control-lg" type="text" name="product_name" placeholder="Enter product name" />
                                <input type="hidden" name="pharmacy_id" value="{{ Auth::guard('pharmacy')->user()->id }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input class="form-control form-control-lg" type="number" name="quantity" placeholder="Enter quantity" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Batch Number</label>
                                <input class="form-control form-control-lg" type="text" name="batch_number" placeholder="Enter batch number" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Drug Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="Null">Select Drug Category</option>
                                    @foreach ($category as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input class="form-control form-control-lg" type="number" name="price" placeholder="Enter price" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">MRP</label>
                                <input class="form-control form-control-lg" type="text" name="mrp" placeholder="Enter mrp" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Expiry Date</label>
                                <input class="form-control form-control-lg" type="date" name="expiry_date"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Number</label>
                                <input type="file" name="image" placeholder="Choose image"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Product Description</label>
                                <textarea name="description">Enter product description!</textarea>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-lg btn-success">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
