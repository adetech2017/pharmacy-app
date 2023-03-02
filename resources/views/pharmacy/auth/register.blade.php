<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Sign Up | Rescue Pharm</title>

	<link href="{{ asset('css/app1.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
                <div class="mx-auto col-sm-10 col-md-8 col-lg-8 d-table h-100">
					<div class="align-middle d-table-cell">

						<div class="mt-4 text-center">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for you customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
									<form method="POST" action="{{ route('create.pharmacy') }}">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" id="cityLat" name="latitude">
                                            <input type="hidden" id="cityLng" name="longitude">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Store Name</label>
                                                    <input class="form-control form-control-lg" type="text" name="store_name" placeholder="Enter your store name" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Office Mobile No.</label>
                                                    <input class="form-control form-control-lg" type="text" name="office_phone_number" placeholder="Enter office number" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Bussiness Number(CAC)</label>
                                                    <input class="form-control form-control-lg" type="text" name="business_number" placeholder="Enter business number" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Office Address</label>
                                                    <input class="form-control form-control-lg" id="autocomplete" type="text" name="office_address" placeholder="Enter office address" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Registration Number</label>
                                                    <input class="form-control form-control-lg" type="text" name="reg_number" placeholder="Enter registration number" />
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Comfirm Password</label>
                                                    <input class="form-control form-control-lg" type="password" name="password_confirmation" placeholder="Enter confirm password" />
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Contact Person Name</label>
                                                    <input class="form-control form-control-lg" type="text" name="contact_name" placeholder="Enter contact person name" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Contact Email</label>
                                                    <input class="form-control form-control-lg" type="text" name="contact_email" placeholder="Enter contact email" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Contact Phone</label>
                                                    <input class="form-control form-control-lg" type="text" name="contact_phone_number" placeholder="Enter contact phone" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Contact Address</label>
                                                    <input class="form-control form-control-lg" type="text" name="contact_address" placeholder="Enter contact address" />
                                                </div>
                                            </div>

                                            <div class="mt-3 text-center">
                                                {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                                                <button type="submit" class="btn btn-lg btn-primary">Creat Account</button>
                                            </div>
                                        </div>
									</form>
								</div>
                                <p>Exiting Pharmacy<small>
                                    <a href="{{ url('pharmacy/register') }}">Login</a>
                                </small></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('js/app1.js') }}"></script>
    {{-- <script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key=AIzaSyCW1fxBIfS_GGMVlm0_PgQNO6Ei-sm2Ep4"></script> --}}
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW1fxBIfS_GGMVlm0_PgQNO6Ei-sm2Ep4&libraries=places&callback=initAutocomplete">
    </script>

    {{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places"></script> --}}

    <script>
        //google.maps.event.addDomListener(window, 'load', initialize);

        function initAutocomplete() {
            var input = document.getElementById('autocomplete');
            const options = {
                //bounds: defaultBounds,
                componentRestrictions: { country: "ng" },
                fields: ["address_components", "geometry", "icon", "name"],
                //strictBounds: false,
                //types: ["establishment"],
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                console.log(place);
                document.getElementById('cityLat').value = (place.geometry['location'].lat());
                document.getElementById('cityLng').value = (place.geometry['location'].lng());
                //$("#latitudeArea").removeClass("d-none");
                //$("#longtitudeArea").removeClass("d-none");
            });
        }

        //window.initMap = initMap;
    </script>

</body>

</html>
