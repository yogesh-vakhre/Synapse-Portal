@extends('layouts.app')

<!--Page title -->
@section('title', 'New slipstreams')

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
                                        New slipstreams
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new slipstreams
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="slipstreams-form">

                        <!-- Speed -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Speed
                            </label>

                            <!-- Select -->
                            <select class="form-select" id="speed" name="speed">
                                <option value="">Select</option>
                                <option value="100mb">100mb</option>
                                <option value="200mb">200mb</option>
                                <option value="300mb">300mb</option>
                                <option value="400mb">400mb</option>
                                <option value="500mb">500mb</option>
                                <option value="600mb">600mb</option>
                                <option value="700mb">700mb</option>
                                <option value="800mb">800mb</option>
                                <option value="900mb">900mb</option>
                                <option value="1gb">1gb</option>
                            </select>

                        </div>
                        <!-- Pop site feed  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Pop site feed
                            </label>

                            <!-- Select -->
                            <select class="form-select" name="PopsiteFeed" id="PopsiteFeed">
                                <option value="">Select</option>
                                <option value="ABC">ABC</option>
                                <option value="Elevator">Elevator</option>
                                <option value="Annex">Annex</option>
                                <option value="Long lane">Long lane</option>
                                <option value="Hope St Hotel">Hope St Hotel</option>
                            </select>

                        </div>

                        <!-- Lease line provider  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Lease line provider
                            </label>

                            <!-- Select -->
                            <select class="form-select" name="leaseLineProvider" id="provider">
                                <option value="">Select</option>
                                <option value="BT">BT</option>
                                <option value="Virgin">Virgin</option>
                                <option value="Talk Talk">Talk Talk</option>
                                <option value="Vodaphone">Vodaphone</option>
                                <option value="O2">O2</option>
                                <option value="EE">EE</option>
                            </select>

                        </div>
                        <!-- Dream machine settings  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Dream machine settings
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control mb-3" id="dreamMachineSettings"
                                name="dreamMachineSettings" placeholder="xxx.xxx.xxx.xxx" data-inputmask="'alias': 'ip'">
                        </div>

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Create slipstreams
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this slipstreams
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
