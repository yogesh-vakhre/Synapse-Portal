@extends('layouts.app')

<!--Page title -->
@section('title', 'Edit sentinel')

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
                                        Edit sentinel
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Edit a new sentinel
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="sentinel-form">

                        <!-- Company to test   -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Company to test
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control mb-3" id="companyToTest " name="companyToTest ">
                        </div>

                        <!-- Month testing   -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Month testing
                            </label>
                            <!-- Select -->
                            <select class="form-select" name="monthTesting " id="monthTesting ">
                                <option value="">Select</option>
                                <option value="Test1">Test1</option>
                                <option value="Test2">Test1</option>
                                <option value="Test3">Test3</option>
                            </select>

                        </div>
                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Update sentinel
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this sentinel
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
