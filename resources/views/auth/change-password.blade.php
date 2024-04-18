@extends('layouts.app')

<!--Page title -->
@section('title', 'Change Password')

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

                                    <!-- Pretitle -->
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
                                            <a href="{{ route('auth.change_password') }}" class="nav-link active">
                                                Change password
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('auth.account_security') }}" class="nav-link">
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
                                Change your password
                            </h2>

                            <!-- Text -->
                            <p class="text-body-secondary mb-xl-0">
                                We will email you a confirmation when changing your password, so please expect that email
                                after submitting.
                            </p>

                        </div>
                        <div class="col-12 col-xl-auto">

                            <!-- Button -->
                            <a href="{{ route('password.request') }}" class="btn btn-white">
                                Forgot your password?
                            </a>

                        </div>
                    </div> <!-- / .row -->

                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2">

                            <!-- Card -->
                            <div class="card bg-light border ms-md-4">
                                <div class="card-body">

                                    <!-- Text -->
                                    <p class="mb-2">
                                        Password requirements
                                    </p>

                                    <!-- Text -->
                                    <p class="small text-body-secondary mb-2">
                                        To create a new password, you have to meet all of the following requirements:
                                    </p>

                                    <!-- List group -->
                                    <ul class="small text-body-secondary ps-4 mb-0">
                                        <li>
                                            Minimum 8 character
                                        </li>
                                        <li>
                                            At least one special character
                                        </li>
                                        <li>
                                            At least one number
                                        </li>
                                        <li>
                                            Can’t be the same as a previous password
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Form -->
                            <form method="POST" action="{{ route('auth.update_password') }}" id="form-update-password">
                                @csrf

                                <!-- Password -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Current password
                                    </label>

                                    <!-- Input -->
                                    <input type="password"
                                        class="form-control @error('currentPassword') is-invalid @enderror"
                                        id="currentPassword" value="{{ old('currentPassword') }}" name="currentPassword"
                                        autocomplete="currentPassword">
                                    @error('currentPassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- New password -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        New password
                                    </label>

                                    <!-- Input -->
                                    <input type="password" class="form-control @error('newPassword') is-invalid @enderror"
                                        id="newPassword" value="{{ old('newPassword') }}" name="newPassword">
                                    @error('newPassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Confirm new password -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Confirm new password
                                    </label>

                                    <!-- Input -->
                                    <input type="password"
                                        class="form-control @error('confirmNewPassword') is-invalid @enderror"
                                        id="confirmNewPassword" name="confirmNewPassword"
                                        value="{{ old('confirmNewPassword') }}" autocomplete="confirmNewPassword">
                                    @error('confirmNewPassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Submit -->
                                <button class="btn w-100 btn-primary lift" type="submit">
                                    Update password
                                </button>

                            </form>

                        </div>
                    </div> <!-- / .row -->
                    <br>
                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->
@endsection
