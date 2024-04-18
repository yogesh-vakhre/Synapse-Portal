@extends('layouts.app')

<!--Page title -->
@section('title', 'Show vortex')

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

                                    <!-- Page title -->
                                    <h6 class="header-pretitle">
                                        Show vortex
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Show a vortex
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- overview -->
                    <div class="col-12 ">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">

                                <!-- Header -->
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Checkbox -->
                                        <div class="form-check form-check-circle">
                                            <input class="form-check-input list-checkbox" type="checkbox"
                                                id="cardsCheckboxOne">
                                            <label class="form-check-label" for="cardsCheckboxOne"></label>
                                        </div>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{ route('vortexes.destroy', 1) }}" class="dropdown-item">
                                                    Delete
                                                </a>
                                                <a href="{{ route('vortexes.edit', 1) }}" class="dropdown-item">
                                                    Edit
                                                </a>
                                                <a href="{{ route('vortexes.show', 1) }}" class="dropdown-item">
                                                    Show
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->

                                <!-- Image -->
                                <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                    <img src="{{ asset('assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                        class="avatar-img rounded-circle" alt="...">
                                </a>

                                <!-- Body -->
                                <div class="text-center mb-5">

                                    <!-- Heading -->
                                    <h2 class="card-title">
                                        <a class="item-name" href="#">Dianna
                                            Smiley</a>
                                    </h2>

                                    <!-- Text -->
                                    <p class="small text-body-secondary mb-3">
                                        <span class="item-title">Designer</span> at <span
                                            class="item-company">Skyline</span>
                                    </p>

                                    <!-- Buttons -->

                                    <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                        <i class="fe fe-mail me-1"></i> Email
                                    </a>

                                </div>

                                <!-- Divider -->
                                <hr class="card-divider mb-0">

                                <!-- List group -->
                                <div class="list-group list-group-flush mb-n3">
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small>Skyline Product</small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <small>Skyline</small>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small>Lead Score</small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Badge -->
                                                <span class="item-score badge text-bg-danger-subtle">1/10</span>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
