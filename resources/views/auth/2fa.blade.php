@extends('layouts.auth')

<!--Page Title -->
@section('title', '2FA Verification')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')
    <!-- CONTENT================================================== -->
    <div class="container-fluid">
        <!-- Alerts toast-->
        @include('layouts.toast')

        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 mb-3 align-self-center">

                <!-- Logo -->
                {{-- <a class="text-center" href="{{ url('/') }}">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="logo mx-auto d-block"
                        alt="{{ config('app.name', 'Synapse') }}">
                </a> --}}

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    2FA Verification
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary text-center mb-5">
                    We sent OTP to email : {{ secure_email_format(auth()->user()->email) }}
                </p>

                <!-- Form -->
                <form id="form-2fa" method="POST" action="{{ route('2fa.verify_code') }}">
                    @csrf
                    <!-- Code -->
                    <div class="form-group">

                        <!-- Label -->
                        <label class="form-label">
                            Code
                        </label>
                        <!-- Input -->
                        <input id="code" type="number" class="form-control @error('code') is-invalid @enderror"
                            name="code" value="{{ old('code') }}" autocomplete="code" autofocus>
                        @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
                        Submit
                    </button>

                    <!-- Link -->
                    <p class="text-center">
                        <small class="text-body-secondary text-center">
                            Don't have an code yet? <a href="{{ route('2fa.resend') }}">Resend Code</a>.
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
