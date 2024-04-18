    <div data-bs-theme="">
        <nav class="navbar navbar-vertical fixed-start navbar-expand-md" id="sidebar">
            <div class="container-fluid">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
                    aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <img src="{{ asset('/assets/favicon/apple-icon-152x152.png') }}" class="navbar-brand-img mx-auto"
                        alt="...">
                </a>

                <!-- User (xs) -->
                <div class="navbar-user d-md-none">

                    <!-- Dropdown -->
                    <div class="dropdown">

                        <!-- Toggle -->
                        <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-online">
                                <img src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                    class="avatar-img rounded-circle" alt="...">
                            </div>
                        </a>

                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <hr class="dropdown-divider">
                            <a href="{{ url('/sign-in') }}" class="dropdown-item">Logout</a>
                        </div>

                    </div>

                </div>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">

                    <!-- Form -->
                    <form class="mt-4 mb-3 d-md-none">
                        <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </form>

                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">
                                <i class="fe fe-home"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('skyline-users.index') }}">
                                <i class="fe fe-globe"></i> IT Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('voices.index') }}">
                                <i class="fe fe-briefcase"></i> Comms
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('scouts.index') }}">
                                <i class="fe fe-shield"></i> Security
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('citadels.index') }}">
                                <i class="fe fe-chrome"></i> Web
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activity_logs.index') }}">
                                <i class="fe fe-activity"></i> Activity Logs
                            </a>
                        </li>
                    </ul>

                    <!-- Push content down -->
                    <div class="mt-auto"></div>


                    <!-- User (md) -->
                    @include('layouts.sidebar-user')

                </div> <!-- / .navbar-collapse -->

            </div>
        </nav>
    </div>
    <!-- MODALS -->
    @yield('modals')

    <!-- OFFCANVAS -->

    <!-- Offcanvas: Search -->
    <div class="offcanvas offcanvas-start" id="sidebarOffcanvasSearch" tabindex="-1">
        <div class="offcanvas-body" data-list='{"valueNames": ["name"]}'>

            <!-- Form -->
            <form class="mb-4">
                <div class="input-group input-group-merge input-group-rounded input-group-reverse">
                    <input class="form-control list-search" type="search" placeholder="Search">
                    <div class="input-group-text">
                        <span class="fe fe-search"></span>
                    </div>
                </div>
            </form>

            <!-- List group -->
            <div class="my-n3">
                <div class="list-group list-group-flush list-group-focus list">
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{ asset('/assets/img/default-image.png') }}" alt="..."
                                        class="avatar-img rounded">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Airbnb
                                </h4>

                                <!-- Time -->
                                <p class="small text-body-secondary mb-0">
                                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr
                                        ago</time>
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{ asset('/assets/img/default-image.png') }}" alt="..."
                                        class="avatar-img rounded">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Medium Corporation
                                </h4>

                                <!-- Time -->
                                <p class="small text-body-secondary mb-0">
                                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr
                                        ago</time>
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-4by3">
                                    <img src="{{ asset('/assets/img/default-image.png') }}" alt="..."
                                        class="avatar-img rounded">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Homepage Redesign
                                </h4>

                                <!-- Time -->
                                <p class="small text-body-secondary mb-0">
                                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr
                                        ago</time>
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-4by3">
                                    <img src="{{ asset('/assets/img/default-image.png') }}" alt="..."
                                        class="avatar-img rounded">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Travels & Time
                                </h4>

                                <!-- Time -->
                                <p class="small text-body-secondary mb-0">
                                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr
                                        ago</time>
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-4by3">
                                    <img src="{{ asset('/assets/img/default-image.png') }}" alt="..."
                                        class="avatar-img rounded">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Safari Exploration
                                </h4>

                                <!-- Time -->
                                <p class="small text-body-secondary mb-0">
                                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr
                                        ago</time>
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Dianna Smiley
                                </h4>

                                <!-- Status -->
                                <p class="text-body small mb-0">
                                    <span class="text-success">●</span> Online
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="text-body text-focus mb-1 name">
                                    Ab Hadley
                                </h4>

                                <!-- Status -->
                                <p class="text-body small mb-0">
                                    <span class="text-danger">●</span> Offline
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Offcanvas: Activity -->
    <div class="offcanvas offcanvas-start" id="sidebarOffcanvasActivity" tabindex="-1">
        <div class="offcanvas-header">

            <!-- Title -->
            <h4 class="offcanvas-title">
                Notifications
            </h4>

            <!-- Navs -->
            <ul class="nav nav-tabs nav-tabs-sm modal-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#modalActivityAction">Action</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#modalActivityUser">User</a>
                </li>
            </ul>

        </div>
        <div class="offcanvas-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="modalActivityAction">

                    <!-- List group -->
                    <div class="list-group list-group-flush list-group-activity my-n3">
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-mail"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        Launchday 1.4.0 update email sent
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        Sent to all 1,851 subscribers over a 24 hour period
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-archive"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        New project "Goodkit" created
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        Looks like there might be a new theme soon.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2h ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-code"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        Dashkit 1.5.0 was deployed.
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        A successful to deploy to production was executed.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-git-branch"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        "Update Dependencies" branch was created.
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        This branch was created off of the "master" branch.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-mail"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        Launchday 1.4.0 update email sent
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        Sent to all 1,851 subscribers over a 24 hour period
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-archive"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        New project "Goodkit" created
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        Looks like there might be a new theme soon.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2h ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-code"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        Dashkit 1.5.0 was deployed.
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        A successful to deploy to production was executed.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-git-branch"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        "Update Dependencies" branch was created.
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        This branch was created off of the "master" branch.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-mail"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        Launchday 1.4.0 update email sent
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        Sent to all 1,851 subscribers over a 24 hour period
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-archive"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        New project "Goodkit" created
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        Looks like there might be a new theme soon.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2h ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-code"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        Dashkit 1.5.0 was deployed.
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        A successful to deploy to production was executed.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-git-branch"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Heading -->
                                    <h5 class="mb-1">
                                        "Update Dependencies" branch was created.
                                    </h5>

                                    <!-- Text -->
                                    <p class="small text-gray-700 mb-0">
                                        This branch was created off of the "master" branch.
                                    </p>

                                    <!-- Time -->
                                    <small class="text-body-secondary">
                                        2m ago
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                    </div>

                </div>
                <div class="tab-pane fade" id="modalActivityUser">

                    <!-- List group -->
                    <div class="list-group list-group-flush list-group-activity my-n3">
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                            </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                        </a>
                        <a class="list-group-item text-reset" href="#">
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
                            </div> <!-- / .row -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
