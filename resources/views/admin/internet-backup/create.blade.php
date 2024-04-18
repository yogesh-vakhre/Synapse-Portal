@extends('layouts.app')

<!--Page title -->
@section('title', 'New internet backup')

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
                                        New internet backup
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new internet backup
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="internet-backup-form">

                        <!-- Line Type -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Line Type
                            </label>

                            <!-- Select -->
                            <select class="form-select" id="lineType" name="lineType">
                                <<option value="">Select</option>
                                    <option value="FTTP">FTTP</option>
                                    <option value="FTTC">FTTC</option>
                                    <option value="SO Gea">SO Gea</option>
                                    <option value="5G">5G</option>

                            </select>

                        </div>
                        <!-- Provider -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Provider
                            </label>

                            <!-- Select -->
                            <select class="form-select" name="provider" id="provider">
                                <option value="">Select</option>
                                <option value="BT">BT</option>
                                <option value="Virgin">Virgin</option>
                                <option value="Talk Talk">Talk Talk</option>
                                <option value="Vodaphone">Vodaphone</option>
                                <option value="O2">O2</option>
                                <option value="EE">EE</option>
                            </select>

                        </div>

                        <!-- Package License -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Package
                            </label>

                            <!-- Input -->
                            <input type="text" name="internet backupLicense" id="internet backupLicense"
                                class="form-control">

                        </div>
                        <!-- Contract length -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Contract length
                            </label>

                            <!-- Input -->
                            <input type="text" name="contractLength" id="contractLength" class="form-control">

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
                            Create internet backup
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this internet backup
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
