<!-- Topbar Start -->
<div class="topbar-custom">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li>
                    <button class="button-toggle-menu nav-link">
                        <i data-feather="menu" class="noti-icon"></i>
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <h5 class="mb-0">Selamat Datang, {{ Auth::user()->name }}</h5>
                </li>
            </ul>

            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <!-- Search Box -->
                <li class="d-none d-lg-block">
                    <form class="app-search d-none d-md-block me-auto">
                        <div class="position-relative topbar-search">
                            <input type="text" class="form-control ps-4" placeholder="Search..." />
                            <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                        </div>
                    </form>
                </li>

                <!-- Fullscreen Button -->
                <li class="d-none d-sm-flex">
                    <button type="button" class="btn nav-link" data-toggle="fullscreen">
                        <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                    </button>
                </li>

                <!-- Dark/Light Mode -->
                <li class="d-none d-sm-flex">
                    <button type="button" class="btn nav-link" id="light-dark-mode">
                        <i data-feather="moon" class="align-middle dark-mode"></i>
                        <i data-feather="sun" class="align-middle light-mode"></i>
                    </button>
                </li>

                <!-- User Dropdown -->
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ms-1">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                        <form action="{{ route('logout') }}" method="POST" class="px-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="mdi mdi-logout fs-16 align-middle me-1"></i> Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end Topbar -->