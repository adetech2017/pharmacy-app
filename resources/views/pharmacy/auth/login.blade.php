@extends('layouts.auth-layout')

@section('content')
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="mx-auto col-sm-10 col-md-8 col-lg-6 d-table h-100">
                <div class="align-middle d-table-cell">

                    <div class="mt-4 text-center">
                        <h1 class="h2">Welcome back</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="img/avatars/avatar.jpg" alt="RescuePharmacy" class="img-fluid rounded-circle" width="132" height="132" />
                                </div>
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
                                <form method="POST" action="{{ route('auth.pharmacy') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                        <small>
                                            <a href="{{ route('forget.password.get') }}">Forgot password?</a>
                                        </small>
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" checked>
                                            <span class="form-check-label">
                                                Remember me next time
                                            </span>
                                        </label>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <p>Create new Pharmacy<small>
                                <a href="{{ url('pharmacy/register') }}">Register</a>
                            </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
