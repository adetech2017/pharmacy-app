<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RescuePharm - Online Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rescue Pharm" name="keywords">
    <meta content="Rescue Pharm" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontEnd/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontEnd/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="py-1 row bg-secondary px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="mr-3 text-body" href="">About</a>
                    <a class="mr-3 text-body" href="{{ url('contact-us') }}">Contact</a>
                    <a class="mr-3 text-body" href="">Help</a>
                    <a class="mr-3 text-body" href="">FAQs</a>
                </div>
            </div>
            <div class="text-center col-lg-6 text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">
                                <a href="{{ url('/pharmacy/login') }}">Pharmacy</a>
                            </button>
                            <button class="dropdown-item" type="button">User</button>
                        </div>
                    </div>
                    <div class="mx-2 btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">NG</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="px-0 ml-2 btn">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="border badge text-dark border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="{{ url('/cart') }}" class="px-0 ml-2 btn">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="border badge text-dark border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-3 row align-items-center bg-light px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <span class="px-2 h1 text-uppercase text-success bg-dark">Multi</span>
                    <span class="px-2 h1 text-uppercase text-dark bg-primary ml-n1">Shop</span>
                </a>
            </div>
            <div class="text-left col-lg-4 col-6">
                <form name="autocomplete-textbox" id="autocomplete-textbox" method="get" action="{{ route('search') }}">
                    @csrf
                    <div class="input-group">
                        {{-- <div class="input-group-append">
                            <span class="bg-transparent input-group-text text-success">
                                <i class="fa fa-search"></i>
                            </span>
                        </div> --}}
                        <input type="text" id="name" name="product_name" class="form-control" placeholder="Search for the medication (drug name)">
                        <button class="ml-2 btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="text-right col-lg-4 col-6">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="m-0 text-dark"><i class="mr-2 fa fa-bars"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="p-0 collapse position-absolute navbar navbar-vertical navbar-light align-items-start bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        @php
                            $category = App\Models\DrugCategory::get()
                        @endphp
                        @foreach ($category as $result)
                            <a href="" class="nav-item nav-link">{{ $result->category_name }}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="px-0 py-3 navbar navbar-expand-lg bg-dark navbar-dark py-lg-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="px-2 h1 text-uppercase text-dark bg-light">Multi</span>
                        <span class="px-2 h1 text-uppercase text-light bg-primary ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="py-0 mr-auto navbar-nav">
                            <a href="{{ url('/') }}" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}">Home</a>
                            <a href="{{ url('shop') }}" class="nav-item nav-link {{Request::is('shop') ? 'active' : ''}}">Shop</a>
                            <a href="{{ url('/cart') }}" class="nav-item nav-link {{Request::is('cart') ? 'active' : ''}}">Shopping Cart</a>
                            <a href="{{ url('/pharmacy/login') }}" class="nav-item nav-link {{Request::is('pharmacy/login') ? 'active' : ''}}">Register Pharmacy</a>
                            {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="mt-1 fa fa-angle-down"></i></a>
                                <div class="m-0 border-0 dropdown-menu bg-primary rounded-0">

                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div> --}}
                            <a href="{{ url('contact-us') }}" class="nav-item nav-link {{Request::is('contact-us') ? 'active' : ''}}">Contact</a>
                        </div>
                        <div class="py-0 ml-auto navbar-nav d-none d-lg-block">
                            <a href="" class="px-0 btn">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="border badge text-secondary border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="{{ url('/cart') }}" class="px-0 ml-3 btn">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="border badge text-secondary border-secondary rounded-circle" style="padding-bottom: 2px;">{{ count((array) session('cart')) }}</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

    @yield('content')

    <!-- Footer Start -->
    <div class="pt-5 mt-5 container-fluid bg-dark text-secondary">
        <div class="pt-5 row px-xl-5">
            <div class="pr-3 mb-5 col-lg-4 col-md-12 pr-xl-5">
                <h5 class="mb-4 text-secondary text-uppercase">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="mr-3 fa fa-map-marker-alt text-success"></i>Oregun, Ikeja Lagos, Nigeria</p>
                <p class="mb-2"><i class="mr-3 fa fa-envelope text-success"></i>info@rescuepharm.com</p>
                <p class="mb-0"><i class="mr-3 fa fa-phone-alt text-success"></i>+234 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="mb-5 col-md-4">
                        <h5 class="mb-4 text-secondary text-uppercase">Quick Link</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="mb-2 text-secondary" href="{{ url('/') }}"><i class="mr-2 fa fa-angle-right"></i>Home</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>Our Shop</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>About</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>Shopping Cart</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>FAQ</a>
                            <a class="text-secondary" href="{{ url('contact-us') }}"><i class="mr-2 fa fa-angle-right"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="mb-5 col-md-4">
                        <h5 class="mb-4 text-secondary text-uppercase">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="mb-2 text-secondary" href="{{ url('/') }}"><i class="mr-2 fa fa-angle-right"></i>Register</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>Login</a>
                            <a class="mb-2 text-secondary" href="{{ url('pharmacy/login') }}"><i class="mr-2 fa fa-angle-right"></i>Pharmacy</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>Dispatcher</a>
                            <a class="mb-2 text-secondary" href="#"><i class="mr-2 fa fa-angle-right"></i>Checkout</a>
                            <a class="text-secondary" href="{{ url('contact-us') }}"><i class="mr-2 fa fa-angle-right"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="mb-5 col-md-4">
                        <h5 class="mb-4 text-secondary text-uppercase">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="mt-4 mb-3 text-secondary text-uppercase">Follow Us</h6>
                        <div class="d-flex">
                            <a class="mr-2 btn btn-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mr-2 btn btn-primary btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mr-2 btn btn-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 row border-top mx-xl-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="text-center mb-md-0 text-md-left text-secondary">
                    &copy; <a class="text-success" href="https://rescuepharm.com.ng">RescuePharm</a>. All Rights Reserved. Designed
                    by
                    <a class="text-success" href="https://infitron.net">InfitronTechnologies</a>
                </p>
            </div>
            <div class="text-center col-md-6 px-xl-0 text-md-right">
                <img class="img-fluid" src="{{ asset('frontEnd/img/payments.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontEnd//lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontEnd//lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontEnd/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontEnd/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontEnd/js/main.js') }}"></script>
    <script src="{{ asset('frontEnd/js/auto.js') }}"></script>

    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>

    {{-- <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script> --}}

    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>




</body>

</html>
