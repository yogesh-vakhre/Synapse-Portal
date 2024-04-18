@extends('layouts.auth')

<!--Page Title -->
@section('title', 'Two Factor Authentication')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')
    <!-- CONTENT
                ================================================== -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-xl-8 my-5">

                 <!-- Logo -->
                 <a class="text-center" href="{{ url('/') }}">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="logo mx-auto d-block"
                        alt="{{ config('app.name', 'Synapse') }}">
                </a>
                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Two Factor Authentication
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary   mb-5">
                    Two factor authentication (2FA) strengthens access security by requiring two methods (also
                    referred to as factors) to verify your identity. Two factor authentication protects against
                    phishing, social engineering and password brute force attacks and secures your logins from
                    attackers exploiting weak or stolen credentials.
                </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul type="none">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <p class="text-body-secondary  mb-5">
                    Open up your 2FA mobile app and scan the following QR barcode:<br />
                    @auth
                        {!! auth()->user()->isGoogle2faBarcode() !!}
                    @endauth
                </p>
                <p class="text-body-secondary  mb-5">
                    If your 2FA mobile app does not support QR barcodes,
                    enter in the following number: <code>{{ auth()->user()->google2fa_secret }}</code>
                    <br /><br />

                    <strong>Enter the pin from Google Authenticator Enable 2FA</strong>
                </p>
                <div class="col-12 col-md-8 col-xl-6">

                    <!-- Form -->
                    <form id="form-google2fa-verify" action="{{ route('google2fa.verify') }}" method="POST">
                        @csrf
                        <!-- One Time Password -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label">
                                One Time Password
                            </label>

                            <!-- Input -->
                            <input type="text" id="one_time_password" name="one_time_password"
                                class="form-control  @error('one_time_password') is-invalid @enderror">
                            @error('one_time_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
                            Authenticate
                        </button>

                    </form>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
@endsection
