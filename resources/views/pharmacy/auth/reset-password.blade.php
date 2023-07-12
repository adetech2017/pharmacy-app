@extends('layouts.auth-layout')

@section('content')
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="mx-auto col-sm-10 col-md-8 col-lg-6 d-table h-100">
                <div class="align-middle d-table-cell">

                    <div class="mt-4 text-center">
                        <h1 class="h2">Reset Password</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="img/avatars/avatar.jpg" alt="RescuePharm" class="img-fluid rounded-circle" width="132" height="132" />
                                </div>

                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif

                                <form action="{{ route('reset.password.post') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password"/>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password_confirmation" />
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
