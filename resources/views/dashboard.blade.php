@extends('layouts.app')

<!--Page title -->
@section('title', 'Dashboard')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- HEADER -->
        <div class="header">
            <div class="container-fluid">

                <!-- Body -->
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                                Overview
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                                Dashboard
                            </h1>

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            {{-- <a href="#" class="btn btn-primary lift">
                                Create Report
                            </a> --}}

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .header-body -->

            </div>
        </div> <!-- / .header -->

        <!-- CARDS -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Tickets Open -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-body-secondary mb-2">
                                        Tickets Open
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        24,500
                                    </span>

                                    <!-- Badge -->
                                    {{-- <span class="badge text-bg-success-subtle mt-n1">
                                        +3.5%
                                    </span> --}}
                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-dollar-sign text-body-secondary mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Quotes Open -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-body-secondary mb-2">
                                        Quotes Open
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        763
                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Response Time  -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-body-secondary mb-2">
                                        Response Time  %
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        35.5%
                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Chart -->
                                    <div class="chart chart-sparkline">
                                        <canvas class="chart-canvas" id="sparklineChart"></canvas>
                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
                {{-- <div class="col-12 col-lg-6 col-xl">

                    <!-- Time -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-body-secondary mb-2">
                                        Avg. Time
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        2:37
                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-clock text-body-secondary mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div> --}}
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-12 col-xl-4">

                    <!-- Contact information -->
                    <div class="card card-fill">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Contact information
                            </h4>

                            <!-- Link -->
                            <a href="project-overview.html" class="small">View all</a>

                        </div>
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="project-overview.html" class="avatar avatar-4by3">
                                                <img src="{{ asset('/assets/img/default-image.png') }}" alt="..."
                                                    class="avatar-img rounded">
                                            </a>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="mb-1">
                                                <a href="project-overview.html">Emma Lavery</a>
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-body-secondary">
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Action
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Another action
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>

                            </div>

                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div>
                {{-- <div class="col-12 col-xl-8">

                    <!-- Sales -->
                    <div class="card">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Sales
                            </h4>

                            <!-- Nav -->
                            <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click"
                                    data-action="toggle" data-dataset="0">
                                    <a class="nav-link active" href="#" data-bs-toggle="tab">
                                        All
                                    </a>
                                </li>
                                <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click"
                                    data-action="toggle" data-dataset="1">
                                    <a class="nav-link" href="#" data-bs-toggle="tab">
                                        Direct
                                    </a>
                                </li>
                                <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click"
                                    data-action="toggle" data-dataset="2">
                                    <a class="nav-link" href="#" data-bs-toggle="tab">
                                        Organic
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="card-body">

                            <!-- Chart -->
                            <div class="chart">
                                <canvas id="salesChart" class="chart-canvas"></canvas>
                            </div>

                        </div>
                    </div>

                </div> --}}
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12">

                    <!-- Activity Logs -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h4 class="card-header-title">
                                        Activity Logs
                                    </h4>

                                </div>
                                <div class="col-auto">

                                    {{-- <!-- Button -->
                                    <a href="#" class="btn btn-sm btn-white">
                                        Export
                                    </a> --}}

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="table-responsive mb-0"
                            data-list="{&quot;valueNames&quot;: [&quot;subject&quot;, &quot;method&quot;, &quot;created_ats&quot;]}">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <a class="list-sort text-body-secondary" data-sort="item-subject"
                                                href="#">Subject</a>
                                        </th>
                                        <th>
                                            <a class="list-sort text-body-secondary" data-sort="item-url"
                                                href="#">User</a>
                                        </th>
                                        <th>
                                            <a class="list-sort text-body-secondary" data-sort="item-method"
                                                href="#">Method</a>
                                        </th>

                                        <th>
                                            <a class="list-sort text-body-secondary"
                                                data-sort="item-created_at" href="#"> Created At</a>
                                        </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @forelse ( $activityLogs as $activityLog )
                                        <tr>
                                            <td class="subject">
                                                {{ $activityLog->subject}}
                                            </td>
                                            <td class="user">
                                                {{ $activityLog->user->full_name }}
                                            </td>
                                            <td class="method">
                                                {{ $activityLog->method}}
                                            </td>
                                            <td class="created_at">
                                                <time datetime="created_at">{{ $activityLog->created_at}}</time>
                                            </td>

                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0)" data-datatable="false" data-id="{{ $activityLog->id }}" data-action="{{ url('/activity-logs') }}/{{ $activityLog->id }}" class="dropdown-item deleteRecord ">
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Data Available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12 col-xl-5">

                    <!-- Activity -->
                    <div class="card card-fill">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Recent Activity
                            </h4>

                            <!-- Button -->
                            <a class="small" href="#">View all</a>

                        </div>
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-activity my-n3">
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm avatar-online">
                                                <img class="avatar-img rounded-circle"
                                                    src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    alt="...">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Heading -->
                                            <h5 class="mb-1">
                                                Dianna Smiley
                                            </h5>

                                            <!-- Text -->
                                            <p class="small text-gray-700 mb-0">
                                                Uploaded the files "Launchday Logo" and "New Design".
                                            </p>

                                            <!-- Time -->
                                            <small class="text-body-secondary">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm avatar-online">
                                                <img class="avatar-img rounded-circle"
                                                    src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    alt="...">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Heading -->
                                            <h5 class="mb-1">
                                                Ab Hadley
                                            </h5>

                                            <!-- Text -->
                                            <p class="small text-gray-700 mb-0">
                                                Shared the "Why Dashkit?" post with 124 subscribers.
                                            </p>

                                            <!-- Time -->
                                            <small class="text-body-secondary">
                                                1h ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm avatar-offline">
                                                <img class="avatar-img rounded-circle"
                                                    src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                                    alt="...">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Heading -->
                                            <h5 class="mb-1">
                                                Adolfo Hess
                                            </h5>

                                            <!-- Text -->
                                            <p class="small text-gray-700 mb-0">
                                                Exported sales data from Launchday's subscriber data.
                                            </p>

                                            <!-- Time -->
                                            <small class="text-body-secondary">
                                                3h ago
                                            </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-xl-7">

                    <!-- Checklist -->
                    <div class="card">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Scratchpad Checklist
                            </h4>

                            <!-- Badge -->
                            <span class="badge text-bg-secondary-subtle">
                                23 Archived
                            </span>

                        </div>
                        <div class="card-body">

                            <!-- Checklist -->
                            <div class="checklist">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checklistOne">
                                    <label class="form-check-label">Delete the old mess in functions files.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checklistTwo">
                                    <label class="form-check-label">Refactor the core social sharing modules.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checklistThree">
                                    <label class="form-check-label">Create the release notes for the new pages so customers
                                        get psyched.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checklistFour">
                                    <label class="form-check-label">Send Dianna those meeting notes.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checklistFive">
                                    <label class="form-check-label">Share the documentation for the new unified
                                        API.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checklistSix" checked>
                                    <label class="form-check-label">Clean up the Figma file with all of the avatars,
                                        buttons, and other
                                        components.</label>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Input -->
                                    <textarea class="form-control form-control-flush form-control-auto" data-autosize rows="1"
                                        placeholder="Create a task"></textarea>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <button class="btn btn-sm btn-primary">
                                        Add
                                    </button>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

    </div><!-- / .main-content -->

@endsection
