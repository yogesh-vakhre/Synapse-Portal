@extends('layouts.auth')

<!--Page Title -->
@section('title', 'Sign up')

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
                    Sign up
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary text-center mb-5">
                    Bridging Technology & Trust.
                </p>

                <!-- Form -->
                <form>

                    <!-- Email address -->
                    <div class="form-group">

                        <!-- Label -->
                        <label class="form-label">
                            Email Address
                        </label>

                        <!-- Input -->
                        <input type="email" class="form-control" placeholder="name@address.com">

                    </div>

                    <!-- Password -->
                    <div class="form-group">

                        <!-- Label -->
                        <label class="form-label">
                            Password
                        </label>

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input class="form-control" type="password" placeholder="Enter your password">

                            <!-- Icon -->
                            <span class="input-group-text">
                                <i class="fe fe-eye"></i>
                            </span>

                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg w-100 btn-primary mb-3">
                        Sign up
                    </button>

                    <!-- Link -->
                    <div class="text-center">
                        <small class="text-body-secondary text-center">
                            Already have an account? <a href="{{ url('/sign-in') }}">Sign in</a>.
                        </small>
                    </div>

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
