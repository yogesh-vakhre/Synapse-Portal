@extends('layouts.app')

<!--Page title -->
@section('title', 'Show skyline user')

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
                                    {{-- <h6 class="header-pretitle">
                                        Show skyline user
                                    </h6> --}}

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Show skyline user
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



                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        {{-- <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0)" datatabel="false" data-id="{{ base64_encode($user->id) }}" data-action="{{ url('/skyline-users') }}/${data}" class="dropdown-item deleteRecord ">
                                                    Delete
                                                </a>
                                                <a href="{{ route('skyline-users.edit', base64_encode($user->id)) }}" class="dropdown-item">
                                                    Edit
                                                </a>

                                            </div>
                                        </div> --}}

                                    </div>
                                </div> <!-- / .row -->

                                <!-- Image -->
                                {{-- <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                    <img src="{{ asset('assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                        class="avatar-img rounded-circle" alt="...">
                                </a> --}}

                                <!-- Body -->
                                <div class="text-center mb-5">

                                    <!-- Heading -->
                                    <h2 class="card-title">
                                        <a class="item-name" href="#"> {{ $user->full_name }}</a>
                                    </h2>

                                    <!-- Text -->
                                    <p class="small text-body-secondary mb-3">
                                        {{-- <span class="item-title">Designer</span> at <span
                                            class="item-company">Skyline</span> --}}
                                    </p>

                                    <!-- Buttons -->

                                    <a class="btn btn-sm btn-white" href="mailto:{{ $user->email }}">
                                        <i class="fe fe-mail me-1"></i> {{ $user->email }}
                                    </a>

                                </div>

                                <!-- Divider -->
                                <hr class="card-divider mb-0">

                                <!-- List group -->
                                <div class="list-group list-group-flush mb-n3">
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small>Skyline Product</small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <small>{{ ucfirst($user->product) }}</small>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>

                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col">

                                                <!-- Text -->
                                                <small>Status</small>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Badge -->
                                                @if ($user->status === 1)
                                                    <span class="item-status badge text-bg-success-subtle">Active</span>
                                                @elseif($user->status === 0)
                                                    <span class="item-status badge text-bg-danger-subtle">Deactive</span>
                                                @elseif($user->status === 2)
                                                    <span class="item-score badge text-bg-warning-subtle">Pending</span>
                                                @elseif($user->status === 3)
                                                    <span class="item-score badge text-bg-warning-subtle">Block</span>
                                                @endif
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
