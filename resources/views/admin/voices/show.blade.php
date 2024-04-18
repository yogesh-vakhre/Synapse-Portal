@extends('layouts.app')

<!--Page title -->
@section('title', 'Show voice')

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
                                        Show voice
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Show a voice
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
                                            <input class="form-check-input list-checkbox"
                                                type="checkbox" id="cardsCheckboxOne">
                                            <label class="form-check-label"
                                                for="cardsCheckboxOne"></label>
                                        </div>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#"
                                                class="dropdown-ellipses dropdown-toggle"
                                                role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{ route('voices.destroy', 1) }}"
                                                    class="dropdown-item">
                                                    Delete
                                                </a>
                                                <a href="{{ route('voices.edit', 1) }}"
                                                    class="dropdown-item">
                                                    Edit
                                                </a>
                                                <a href="{{ route('voices.show', 1) }}"
                                                    class="dropdown-item">
                                                    Show
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->

                                <!-- Image -->
                                <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                    <img src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                        class="avatar-img rounded-circle" alt="...">
                                </a>

                                <!-- Body -->
                                <div class="text-center mb-5">

                                    <!-- Heading -->
                                    <h2 class="card-title">
                                        <a class="item-name"
                                            href="{{ route('voices.show', 1) }}">Dianna
                                            Smiley</a>
                                    </h2>

                                    <!-- Buttons -->
                                    {{-- <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                        <i class="fe fe-phone me-1"></i> Call
                                    </a> --}}
                                    {{-- <a class="btn btn-sm btn-white"
                                        href="mailto:john.doe@company.com">
                                        <i class="fe fe-mail me-1"></i> Handset Modal
                                    </a> --}}

                                </div>

                                <!-- Divider -->
                                <hr class="card-divider mb-0">

                                <!-- List group -->
                                <div class="list-group list-group-flush mb-n3">
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small class="item-ext-no">Ext No</small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <small>ASD3434</small>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                       <div class="row">
                                           <div class="col">

                                               <!-- Text -->
                                               <small class="item-voice-licence">Voice Licence</small>

                                           </div>
                                           <div class="col-auto">

                                               <!-- Text -->
                                               <small>AXXXXX000</small>

                                           </div>
                                       </div> <!-- / .row -->
                                   </div>
                                    <div class="list-group-item">
                                       <div class="row">
                                           <div class="col">

                                               <!-- Text -->
                                               <small>Handset Modal</small>

                                           </div>
                                           <div class="col-auto">

                                               <!-- Text -->
                                               <small>100000</small>

                                           </div>
                                       </div> <!-- / .row -->
                                   </div>
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small>IT Asset No</small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Badge -->
                                                <span
                                                    class="item-score badge text-bg-danger-subtle">1/10</span>

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
