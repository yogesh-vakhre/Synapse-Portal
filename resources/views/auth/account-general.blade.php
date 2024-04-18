@extends('layouts.app')

<!--Page title -->
@section('title', 'Account General')

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
                                            <a href="{{ route('auth.account_general') }}" class="nav-link active">
                                                General
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('auth.change_password') }}" class="nav-link ">
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

                    <!-- Form -->
                    <form>

                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img class="avatar-img rounded-circle"
                                                src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}" alt="{{ auth()->user()->full_name }}">
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h4 class="mb-1">
                                            Your avatar
                                        </h4>

                                        <!-- Text -->
                                        <small class="text-body-secondary">
                                            PNG or JPG no bigger than 1000px wide and tall.
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <button class="btn btn-sm btn-primary">
                                    Upload
                                </button>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr class="my-5">

                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- First name -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        First name
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control">

                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Last name -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Last name
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control">

                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Email address -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="mb-1">
                                        Email address
                                    </label>

                                    <!-- Form text -->
                                    <small class="form-text text-body-secondary">
                                        This contact will be shown to others publicly, so choose it carefully.
                                    </small>

                                    <!-- Input -->
                                    <input type="email" class="form-control">

                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Phone -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Phone
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control mb-3" placeholder="(___)___-____"
                                        data-inputmask="'mask': '(999)999-9999'">

                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Birthday -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Birthday
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control" data-flatpickr>

                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Button -->
                        <button class="btn btn-primary">
                            Save changes
                        </button>

                        <!-- Divider -->
                        <hr class="my-5">

                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- Public profile -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="mb-1">
                                        Public profile
                                    </label>

                                    <!-- Form text -->
                                    <small class="form-text text-body-secondary">
                                        Making your profile public means that anyone on the Dashkit network will be able to
                                        find you.
                                    </small>

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Switch -->
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="switchOne">
                                                <label class="form-check-label" for="switchOne"></label>
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Help text -->
                                            <small class="text-body-secondary">
                                                You're currently invisible
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Allow for additional Bookings -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="mb-1">
                                        Allow for additional Bookings
                                    </label>

                                    <!-- Form text -->
                                    <small class="form-text text-body-secondary">
                                        If you are available for hire outside of the current situation, you can encourage
                                        others to hire you.
                                    </small>

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Switch -->
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="switchTwo" checked>
                                                <label class="form-check-label" for="switchTwo"></label>
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Help text -->
                                            <small class="text-body-secondary">
                                                You're currently available
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr class="mt-4 mb-5">

                        <div class="row justify-content-between">
                            <div class="col-12 col-md-6">

                                <!-- Heading -->
                                <h4>
                                    Delete your account
                                </h4>

                                <!-- Text -->
                                <p class="small text-body-secondary mb-md-0">
                                    Please note, deleting your account is a permanent action and will no be recoverable once
                                    completed.
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <button class="btn btn-danger">
                                    Delete
                                </button>

                            </div>
                        </div> <!-- / .row -->

                    </form>

                    <br><br>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->
@endsection
