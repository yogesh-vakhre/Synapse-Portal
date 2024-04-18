@extends('layouts.auth')

@section('content')
    <!-- CONTENT
                ================================================== -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-xl-9 my-5">
                <!-- Logo -->
                {{-- <a class="text-center" href="{{ url('/') }}">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="logo mx-auto d-block"
                        alt="{{ config('app.name', 'Synapse') }}">
                </a> --}}
                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Verify Your Email Address
                </h1>

                <!-- Subheading -->
                <p class="text-body-secondary text-center mb-5">
                    Bridging Technology & Trust.
                </p>
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <!-- Content -->
                                <p class="text-body-secondary">
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email, click here to request another') }}
                                </p>
                                <!-- Form -->


                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Resend') }}
                                    </button>
                                </form>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
@endsection
