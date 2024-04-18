@extends('layouts.app')

<!--Page title -->
@section('title', 'New scout')

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
                                        New scout
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new scout
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="scout-form">

                        <!-- IP Address  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                IP Address
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control mb-3" id="ipAddress" name="ipAddress"
                                placeholder="xxx.xxx.xxx.xxx" data-inputmask="'alias': 'ip'">
                        </div>

                        <!-- website -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Website
                            </label>

                            <!-- Input -->
                            <input type="url" name="website" id="website" class="form-control">

                        </div>
                        <!-- How often to run -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                How often to run
                            </label>

                            <!-- Input -->
                            <input type="text" name="HowOftentoRun" id="HowOftentoRun" class="form-control">

                        </div>
                        <!-- Date to run  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Date to run
                            </label>

                            <!-- Input -->
                            <input type="text" HowOftentoRun="datetoRun" id="datetoRun" class="form-control">

                        </div>

                        <!-- Email to send report  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Email to send report
                            </label>

                            <!-- Input -->
                            <input type="text" HowOftentoRun="emailtoSendReport " id="emailtoSendReport "
                                class="form-control">

                        </div>

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Create scout
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this scout
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
