@extends('layouts.app')

<!--Page title -->
@section('title', 'Account Security')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Page Title -->
                                    <h6 class="header-pretitle">
                                        Overview
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Account
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Nav -->
                                    <ul class="nav nav-tabs nav-overflow header-tabs">
                                        <li class="nav-item">
                                            <a href="{{ route('auth.account_general') }}" class="nav-link">
                                                General
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('auth.change_password') }}" class="nav-link">
                                                Change password
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('auth.account_security') }}" class="nav-link active">
                                                Security
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between align-items-center mb-5">
                        <div class="col-12 col-md-9 col-xl-7">

                            <!-- Heading -->
                            <h2 class="mb-2">
                                Two factor security
                            </h2>

                            <!-- Text -->
                            <p class="text-body-secondary mb-md-0">
                                Two-factor authentication adds an additional layer of security to your account by requiring
                                more than just a password to log in.
                            </p>

                            @if (empty(auth()->user()->google2fa_secret))
                                <form id="google2fa-generate-form" method="POST"
                                    action="{{ route('google2fa.generate_secret') }}">
                                    @csrf
                                    <!-- Button -->
                                    <button type="submit" class="btn  btn-primary">Generate Secret Key to Enable
                                        2FA</button>
                                </form>
                            @elseif(auth()->user()->google2fa_enable === 1)
                                <div class="alert alert-success">
                                    2FA is Currently <strong>Enabled</strong> for your account.
                                </div>
                                <p class="small text-body-secondary  mb-2">If you are looking to disable Two Factor
                                    Authentication. Please confirm your password and
                                    Click Disable 2FA Button.</p>
                                <form id="google2fa-disable-form" method="POST" action="{{ route('google2fa.disable') }}">
                                    @csrf
                                    <!-- Current Password -->
                                    <div class="form-group">

                                        <!-- Label -->
                                        <label for="currentPassword" class="form-label">
                                            Current password
                                        </label>

                                        <!-- Input -->
                                        <input type="password" id="currentPassword" name="currentPassword"
                                            class="form-control @error('currentPassword') is-invalid @enderror">
                                        @error('currentPassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Button -->
                                    <button type="submit" class="btn  btn-primary">Disable 2FA</button>
                                </form>
                            @else
                                <!-- List group -->
                                <!-- <ol class="small text-body-secondary ps-4 mb-0">
                                                        <li>
                                                            Scan this barcode with your Google Authenticator App:
                                                        </li>
                                                        <li>
                                                            Enter the pin the code to Enable 2FA
                                                        </li>

                                                    </ol> -->
                            @endif

                        </div>

                        <div class="col-12 col-md-auto">
                            @if (auth()->user()->google2fa_enable === 0)
                                <!-- {!! $google2fa_url !!} -->
                                <form id="form-google2fa-verify" method="POST" action="{{ route('google2fa.enable') }}">
                                    @csrf

                                    <!-- Authenticator Code -->
                                    {{-- <div class="form-group">

                                        <!-- Label -->
                                        <label for="one_time_password" class="form-label">
                                            Authenticator Code
                                        </label>

                                        <!-- Input -->
                                        <input type="password" id="one_time_password" name="one_time_password" class="form-control @error('oneTimePassword') is-invalid @enderror">
                                        @error('one_time_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div> --}}
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary mt-3">Enable 2FA</button>
                                </form>
                            @endif
                        </div>
                    </div> <!-- / .row -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">

                                            <!-- Heading -->
                                            <h4 class="mb-1">
                                                Authenticator app
                                            </h4>

                                            <!-- Text -->
                                            <small class="text-body-secondary">
                                                Google auth or 1Password
                                            </small>

                                        </div>
                                        <div class="col-auto">
                                            @if (auth()->user()->google2fa_enable === 0)
                                                <!-- Button -->
                                                <button type="submit" class="btn btn-sm btn-white">Disable</button>
                                            @else
                                                <!-- Button -->
                                                <button type="submit" class="btn btn-sm btn-success">Enable</button>
                                            @endif
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">

                                            <!-- Heading -->
                                            <h4 class="mb-1">
                                                Authenticator Email <i class="fe fe-info text-body-secondary ms-1"
                                                    data-bs-toggle="tooltip"
                                                    data-title="We use the the phone number you provide in General"></i>
                                            </h4>

                                            <!-- Text -->
                                            <small class="text-body-secondary">
                                                Google Email auth or 1 OTP code
                                            </small>

                                        </div>
                                        <div class="col-auto">
                                            @if (auth()->user()->is_2fa_status === 0)
                                                <!-- Button -->
                                                <a href="{{ route('2fa.update_status', ['status'=>auth()->user()->is_2fa_status]) }}" class="btn btn-sm btn-white">
                                                    Disable
                                                </a>
                                            @else
                                            <!-- Button -->
                                            <a href="{{ route('2fa.update_status', ['status'=>auth()->user()->is_2fa_status]) }}" class="btn btn-sm btn-success">
                                                Enable
                                            </a>
                                            @endif
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">

                                            <!-- Heading -->
                                            <h4 class="mb-1">
                                                SMS Recovery <i class="fe fe-info text-body-secondary ms-1"
                                                    data-bs-toggle="tooltip"
                                                    data-title="We use the the phone number you provide in General"></i>
                                            </h4>

                                            <!-- Text -->
                                            <small class="text-body-secondary">
                                                Standard messaging rates apply
                                            </small>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-white">
                                                Disable
                                            </button>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">

                                            <!-- Heading -->
                                            <h4 class="mb-1">
                                                Recovery codes <i class="fe fe-info text-body-secondary ms-1"
                                                    data-bs-toggle="tooltip"
                                                    data-title="We use the the phone number you provide in General"></i>
                                            </h4>

                                            <!-- Text -->
                                            <small class="text-body-secondary">
                                                Standard messaging rates apply
                                            </small>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-white">
                                                Reveal
                                            </button>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="my-5">

                    <div class="row justify-content-between align-items-center mb-5">
                        <div class="col-12 col-md-9 col-xl-7">

                            <!-- Heading -->
                            <h2 class="mb-2">
                                Device History
                            </h2>

                            <!-- Text -->
                            <p class="text-body-secondary mb-xl-0">
                                If you see a device here that you believe wasn’t you, please contact our account <a
                                    href="#!">fraud department</a> immediately.
                            </p>

                        </div>
                        <div class="col-12 col-xl-auto">

                            @if (count($loggedin_instances) > 1)
                                <!-- Button -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogoutAllDevices"
                                    class="btn btn-white">
                                    Log out all devices
                                </a>
                            @endif

                        </div>
                    </div> <!-- / .row -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my-n3">
                                @forelse ($loggedin_instances as $user)
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Icon -->
                                                @if (stristr($user->user_agent, 'Mobile'))
                                                    <i class="fe fe-smartphone h1"></i>
                                                @else
                                                    <i class="fe fe-monitor h1"></i>
                                                @endif
                                            </div>
                                            <div class="col ms-n2">

                                                <!-- Heading -->
                                                <h4 class="mb-1">

                                                    {{ $user->user_agent }}
                                                </h4>

                                                <!-- Text -->
                                                <small class="text-body-secondary">
                                                    <time
                                                        datetime="{{ $user->last_activity->format('Y-m-d\TH:i') }}">{{ $user->last_activity->format('F j \a\t g:ia') }}
                                                    </time>
                                                </small>

                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="{{ route('auth.logout_devices', ['id' => $user->id]) }}"
                                                    class="btn btn-sm btn-white">
                                                    Log out
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        There is no device history available.!
                                    </div>
                                @endforelse
                            </div>

                        </div>
                    </div>

                    <br>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->
@endsection

@section('modals')
    <!-- Modal: Members -->
    <div class="modal fade" id="modalLogoutAllDevices" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-card card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title" id="exampleModalCenterTitle">
                            Log out from all devices
                        </h4>

                        <!-- Close -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <!-- Form -->
                    <form action="{{ route('auth.logout_other_devices') }}" method="post" class="mb-4"
                        id="form-logout-other-device">
                        @csrf
                        <div class="card-body">
                            <!-- Current password -->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">

                                        <!-- Label -->
                                        <label class="form-label">
                                            Current password
                                        </label>

                                    </div>

                                </div> <!-- / .row -->

                                <!-- Input group -->
                                <div class="input-group input-group-merge">

                                    <!-- Input -->
                                    <input class="form-control  @error('currentPassword') is-invalid @enderror"
                                        type="password" name="currentPassword" id="currentPassword"
                                        placeholder="Enter your current password" autocomplete="currentPassword">

                                    <!-- Icon -->
                                    <span class="input-group-text fe fe-eye" id="togglePassword"></span>
                                </div>
                                <div id="currentPasswordError" class="text-danger"></div>
                                @error('currentPassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <!-- Confirm password -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">

                                        <!-- Label -->
                                        <label class="form-label">
                                            Confirm password
                                        </label>

                                    </div>

                                </div> <!-- / .row -->

                                <!-- Input group -->
                                <div class="input-group input-group-merge">

                                    <!-- Input -->
                                    <input class="form-control  @error('confirmPassword') is-invalid @enderror"
                                        type="password" name="confirmPassword" id="confirmPassword"
                                        placeholder="Enter your confirm password" autocomplete="confirmPassword">

                                    <!-- Icon -->
                                    <span class="input-group-text fe fe-eye" id="togglePassword"></span>
                                </div>
                                <div id="confirmPasswordError" class="text-danger"></div>
                                @error('confirmPassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                        </div>
                        <div class="card-footer">

                            <!-- Buttons -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
