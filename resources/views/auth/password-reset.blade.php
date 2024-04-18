@extends('layouts.auth')

<!--Page Title -->
@section('title', 'Password reset')

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
                    Password reset
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary text-center mb-5">
                    Bridging Technology & Trust.
                </p>
                <!--Show error-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form -->
                <form id="form-reset-password" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <!-- Password -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col">

                                <!-- Label -->
                                <label class="form-label">
                                    Password
                                </label>

                            </div>

                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input class="form-control  @error('password') is-invalid @enderror" type="password"
                                name="password" id="password" placeholder="Enter your password">

                            <!-- Icon -->
                            <span class="input-group-text fe fe-eye" id="togglePassword"></span>
                        </div>
                        <div id="custom_password_error" class="text-danger"></div>
                        @error('password')
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
                                    Confirm Password
                                </label>

                            </div>

                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" placeholder="Enter your confirm password">

                            <!-- Icon -->
                            <span class="input-group-text fe fe-eye" id="togglePassword2"></span>
                        </div>
                        <div id="password_confirmation_error" class="text-danger"></div>
                    </div>
                    <!-- Submit -->
                    <button class="btn btn-lg w-100 btn-primary mb-3">
                        Reset Password
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
                    style="background-image: url( {{ asset('assets/img/covers/auth-side-cover.jpg') }})"></div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
