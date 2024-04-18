@extends('layouts.auth')

<!--Page Title -->
@section('title', 'Forgot Password')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')
    <!-- CONTENT================================================== -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center">

                <!-- Logo -->
                {{-- <a class="text-center" href="{{ url('/') }}">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="logo mx-auto d-block"
                        alt="{{ config('app.name', 'Synapse') }}">
                </a> --}}

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Forgot reset
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary text-center mb-5">
                    Enter your email to get a password reset link.
                </p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Form -->
                <form method="POST" id="form-forgot-password" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email address -->
                    <div class="form-group">

                        <!-- Label -->
                        <label class="form-label">
                            Email Address
                        </label>

                        <!-- Input -->
                        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email" placeholder="john@gmail.com"
                            autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg w-100 btn-primary mb-3">
                        {{ __('Send Password Reset Link') }}
                    </button>

                    <!-- Link -->
                    <div class="text-center">
                        <small class="text-body-secondary text-center">
                            Remember your password? <a href="{{ url('/sign-in') }}">Sign in</a>.
                        </small>
                    </div>

                </form>

            </div>
            <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                <!-- Image -->
                <div class="bg-cover h-100 min-vh-100 mt-n1 me-n3"
                    style="background-image: url(assets/img/covers/auth-side-cover.jpg)"></div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
