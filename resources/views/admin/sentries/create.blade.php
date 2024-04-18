@extends('layouts.app')

<!--Page title -->
@section('title', 'New sentry ')

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
                                        New sentry
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new sentry
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="sentry -form">

                        <!-- Device count  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Device count
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control mb-3" id="deviceCount" name="deviceCount">
                        </div>

                        <!-- Severity to report on  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Severity to report on
                            </label>                            
                            <!-- Select -->
                            <select class="form-select" name="severityToReportOn" id="severityToReportOn">
                                <option value="">Select</option>
                                <option value="Test1">Test1</option>
                                <option value="Test2">Test1</option>
                                <option value="Test3">Test3</option>                               
                            </select>

                        </div>
                        <!-- What devices  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                What devices
                            </label>

                            <!-- Input -->
                            <input type="text" name="whatDevices " id="whatDevices " class="form-control">

                        </div>

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Create sentry
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this sentry
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
