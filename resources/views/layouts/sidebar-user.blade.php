<div class="navbar-user d-none d-md-flex" id="sidebarUser">

    <!-- Icon -->
    <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity"
        aria-controls="sidebarOffcanvasActivity">
        <span class="icon">
            <i class="fe fe-bell"></i>
        </span>
    </a>

    <!-- Dropup -->
    <div class="dropup">

        <!-- Toggle -->
        <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
                <img src="{{ asset('/assets/img/avatars/profiles/avatar-default-512x488.png') }}"
                    class="avatar-img
                    rounded-circle" alt="...">
            </div>
        </a>

        <!-- Menu -->
        <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
            <a href="#" class="dropdown-item">Profile</a>
            <a href="{{ route('auth.change_password') }}" class="dropdown-item">Change Password</a>
            <a href="{{ route('auth.account_general') }}" class="dropdown-item">Settings</a>
            <hr class="dropdown-divider">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
                class="dropdown-item">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>

    <!-- Icon -->
    <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch"
        aria-controls="sidebarOffcanvasSearch">
        <span class="icon">
            <i class="fe fe-search"></i>
        </span>
    </a>

</div>
