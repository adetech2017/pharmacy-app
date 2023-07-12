@extends('layouts.main-front')

@section('content')
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Login</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- login Start -->
<div class="container-fluid">
    <h2 class="mb-4 section-title position-relative text-uppercase mx-xl-5"><span class="pr-3 bg-secondary">Login</span></h2>
    <div class="row px-xl-5">
        <div class="mb-5 col-lg-7">
            <div class="contact-form bg-light p-30">

                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-button>
                            {{ __('Resend Verification Email') }}
                        </x-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="flex items-center justify-end mt-4">
                        <button class="px-4 py-2 btn btn-primary" type="submit" id="sendMessageButton">
                            Log Out
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

