@extends('layouts.main-front')

@section('content')
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Forgot Password</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- login Start -->
<div class="container-fluid">
    <h2 class="mb-4 section-title position-relative text-uppercase mx-xl-5"><span class="pr-3 bg-secondary">Forgot Password</span></h2>
    <div class="row px-xl-5">
        <div class="mb-5 col-lg-7">
            <div class="contact-form bg-light p-30">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                @include('flash-message')

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="control-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email"
                            required="required">
                        {{-- <p class="help-block text-danger"></p> --}}
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button class="px-4 py-2 btn btn-primary" type="submit" id="sendMessageButton">
                            Email Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- login End -->




@endsection
<script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>

