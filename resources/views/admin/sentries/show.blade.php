@extends('layouts.app')

<!--Page title -->
@section('title', 'Show sentry')

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
                                        Show sentry
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Show a sentry
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
                                                <a href="{{ route('sentries.destroy', 1) }}" class="dropdown-item">
                                                    Delete
                                                </a>
                                                <a href="{{ route('sentries.edit', 1) }}" class="dropdown-item">
                                                    Edit
                                                </a>
                                                <a href="{{ route('sentries.show', 1) }}" class="dropdown-item">
                                                    Show
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row --> 
                                <!-- Divider -->
                                <hr class="card-divider mb-0">

                                <!-- List group -->
                                <div class="list-group list-group-flush mb-n3">
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small class="item-ext-no">Device count </small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <span class="item-score badge text-bg-danger-subtle">10</span>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                  
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small> What devices </small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <small>Dummy Device</small>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small> Severity to report on </small>

                                            </div>
                                            <div class="col-auto">
                                                5 June 2023
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
