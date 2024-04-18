@extends('layouts.auth')

<!--Page Title -->
@section('title', 'Sign in')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')
    <!-- CONTENT================================================== -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 mb-3 align-self-center">

                <!-- Logo -->
                {{-- <a class="text-center" href="{{ url('/') }}">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="logo mx-auto d-block"
                        alt="{{ config('app.name', 'Synapse') }}">
                </a> --}}

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Sign in
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary text-center mb-5">
                    Bridging Technology & Trust.
                </p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Form -->
                <form id="form-login" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email address -->
                    <div class="form-group">

                        <!-- Label -->
                        <label class="form-label">
                            Email Address
                        </label>

                        <!-- Input -->
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="name@address.com" autocomplete="email" autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col">

                                <!-- Label -->
                                <label class="form-label">
                                    Password
                                </label>

                            </div>
                            @if (Route::has('password.request'))
                                <div class="col-auto">

                                    <!-- Help text -->
                                    <a href="{{ route('password.request') }}" class="form-text small text-body-secondary">
                                        Forgot password?
                                    </a>

                                </div>
                            @endif
                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input class="form-control  @error('password') is-invalid @enderror" type="password"
                                name="password" id="password" placeholder="Enter your password"
                                autocomplete="current-password">

                            <!-- Icon -->
                            <span class="input-group-text fe fe-eye" id="togglePassword"></span>
                        </div>
                        <div id="custom-password" class="text-danger"></div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg w-100 btn-primary mb-3">
                        Sign in
                    </button>

                    <!-- Link -->
                    <p class="text-center">
                        <small class="text-body-secondary text-center">
                            Don't have an account yet? <a href="{{ url('/sign-up') }}">Sign up</a>.
                        </small>
                    </p>

                </form>

            </div>
            <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                <!-- Image -->
                <div class="bg-cover h-100 min-vh-100 mt-n1 me-n3"
                    style="background-image: url(assets/img/covers/auth-side-cover.jpg);"></div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection

@push('footer-js-css')
@endpush
