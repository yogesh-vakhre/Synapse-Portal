@extends('layouts.app')

<!--Page title -->
@section('title', 'New managed IT')

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
                                        New managed IT
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new managed IT
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="managed-it-form">

                        <!-- First name -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                First Name
                            </label>

                            <!-- Input -->
                            <input type="text" name="firstName" id="firstName" class="form-control">

                        </div>
                        <!-- Last name -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Last Name
                            </label>

                            <!-- Input -->
                            <input type="text" name="lastName" id="lastName" class="form-control">

                        </div>

                        <!-- Email -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Email
                            </label>

                            <!-- Input -->
                            <input type="text" name="email" id="email" class="form-control">

                        </div>

                        <!-- Skyline Product -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label">
                                Skyline Product
                            </label>

                            <!-- Select -->
                            <select class="form-control" name="skylineProduct" data-choices='{"removeItemButton": true}'
                                multiple>
                                <option>CSS</option>
                                <option>HTML</option>
                                <option>JavaScript</option>
                                <option>Bootstrap</option>
                            </select>

                        </div>
                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Create managed IT
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this managed IT
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
