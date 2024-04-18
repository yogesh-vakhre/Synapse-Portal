@extends('layouts.app')

<!--Page title -->
@section('title', 'New voice')

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
                                        New voice
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Create a new voice
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="voice-form">

                        <!-- Name -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Name
                            </label>

                            <!-- Input -->
                            <input type="text" name="name" id="name" class="form-control">

                        </div>
                        <!-- Ext No -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Ext No
                            </label>

                            <!-- Input -->
                            <input type="text" name="extNo" id="extNo" class="form-control">

                        </div>

                        <!-- Voice License -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Voice License
                            </label>

                            <!-- Select -->                            
                            <select class="form-control" id="voice_license"  name="voice_license" data-choices='{"removeItemButton": true}'
                                multiple>
                                <option value="">Select your voice license</option>
                                <option value="Softphone">Softphone</option>
                                <option value="Handset">Handset</option>                              
                            </select>
                        </div>
                        <!-- Handset Model -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Handset Model
                            </label>

                            <!-- Input -->
                            <input type="text" name="handsetModel" id="handsetModel" class="form-control">

                        </div>
                        <!-- IT Asset No -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                IT Asset No
                            </label>

                            <!-- Input -->
                            <input type="text" name="itAssetNo" id="itAssetNo" class="form-control">

                        </div>

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Create voice
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this voice
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
