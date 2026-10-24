
<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <div class="logo-box">
                <a class='logo logo-light' href='index.html'>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('css/pengaduan.css') }}" alt="" height="24">
                    </span>
                </a>
                <a class='logo logo-dark' href='index.html'>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png"') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>
            <!-- Menu Navigation -->
            <ul id="side-menu">
                <li class="menu-title">Menu Utama</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                    @auth
                    @if(Auth::user()->role === 'costumer')
                        <li class="nav-item">
                            <a href="{{ route('pengaduan.create') }}" class="nav-link">
                                <i class="fas fa-edit"></i>
                                <span>Buat Pengaduan</span>
                            </a>
                        </li>
                    @endif
                    
                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.pengaduan.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span>Daftar Pengaduan</span>
                            </a>
                        </li>
                    @endif
                @endauth
                </li>
                
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->