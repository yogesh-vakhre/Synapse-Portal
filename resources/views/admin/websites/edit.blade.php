@extends('layouts.app')

<!--Page title -->
@section('title', 'Edit website')

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
                                        Edit website
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Edit a new website
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="mb-4" id="website-form">

                        <!-- website name -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label">
                                website name
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control">

                        </div>

                        <!-- website description -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label mb-1">
                                website description
                            </label>

                            <!-- Text -->
                            <small class="form-text text-body-secondary">
                                This is how others will learn about the project, so make it good!
                            </small>

                            <!-- Textarea -->
                            <div data-quill></div>

                        </div>

                        <!-- website members -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label">
                                Add website members
                            </label>

                            <!-- Select -->
                            <select class="form-select mb-3"
                                data-choices='{"removeItemButton": true, "searchEnabled": false, "choices": [
                                                  {
                                                    "value": "Dianna Smiley",
                                                    "label": "Dianna Smiley",
                                                    "customProperties": {
                                                      "avatarSrc": "{{ asset('assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    }
                                                  },
                                                  {
                                                    "value": "Ab Hadley",
                                                    "label": "Ab Hadley",
                                                    "customProperties": {
                                                      "avatarSrc": "{{ asset('assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    }
                                                  },
                                                  {
                                                    "value": "Adolfo Hess",
                                                    "label": "Adolfo Hess",
                                                    "customProperties": {
                                                      "avatarSrc": "{{ asset('assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    }
                                                  },
                                                  {
                                                    "value": "Daniela Dewitt",
                                                    "label": "Daniela Dewitt",
                                                    "customProperties": {
                                                      "avatarSrc": "{{ asset('assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    }
                                                  }
                                                ]}'
                                multiple></select>

                        </div>

                        <!-- Divider -->
                        <hr class="mt-4 mb-5">

                        <!-- Project cover -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label mb-1">
                                website cover
                            </label>

                            <!-- Text -->
                            <small class="form-text text-body-secondary">
                                Please use an image no larger than 1200px * 600px.
                            </small>

                            <!-- Dropzone -->
                            <div class="dropzone dropzone-single mb-3"
                                data-dropzone='{"url": "https://", "maxFiles": 1, "acceptedFiles": "image/*"}'>

                                <!-- Fallback -->
                                <div class="fallback">
                                    <div class="form-group">
                                        <label class="form-label" for="websiteCoverUploads">Choose file</label>
                                        <input class="form-control" type="file" id="websiteCoverUploads">
                                    </div>
                                </div>

                                <!-- Preview -->
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-cover">
                                        <img class="dz-preview-img" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..."
                                            data-dz-thumbnail>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- Private website -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label mb-1">
                                        Private website
                                    </label>

                                    <!-- Text -->
                                    <small class="form-text text-body-secondary">
                                        If you are available for hire outside of the current situation, you can encourage
                                        others to hire you.
                                    </small>

                                    <!-- SWitch -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="switchOne" type="checkbox">
                                        <label class="form-check-label" for="switchOne"></label>
                                    </div>

                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Warning -->
                                <div class="card bg-light border">
                                    <div class="card-body">

                                        <!-- Heading -->
                                        <h4 class="mb-2">
                                            <i class="fe fe-alert-triangle"></i> Warning
                                        </h4>

                                        <!-- Text -->
                                        <p class="small text-body-secondary mb-0">
                                            Once a website is made private, you cannot revert it to a public website.
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <a href="#" class="btn w-100 btn-primary">
                            Update website
                        </a>
                        <a href="#" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this website
                        </a>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
