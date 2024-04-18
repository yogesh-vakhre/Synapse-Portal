@extends('layouts.app')

<!--Page title -->
@section('title', 'New citadel')

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
                                        New citadel
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new citadel
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="citadel-form">

                        <!-- Do we host -->
                        <div class="form-group">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Do we host?</label>
                            </div>

                        </div>
                        <!-- Auto renew -->
                        <div class="form-group">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Auto renew</label>
                            </div>

                        </div>
                        <!-- Renewal date -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Renewal date
                            </label>

                            <!-- Input -->
                            <input type="date" name="renewalDate" id="renewalDate" class="form-control">

                        </div>


                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Create citadel
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this citadel
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
