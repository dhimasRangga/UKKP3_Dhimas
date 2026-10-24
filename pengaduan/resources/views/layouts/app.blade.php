<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Hando - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
    <meta name="author" content="Zoyothemes"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- App css -->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        <!-- Icons -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('assets/js/head.js') }}"></script>
</head>

<body data-menu-color="light" data-sidebar="default">

    <!-- Begin page -->
    <div id="app-layout">

        <!-- Topbar Start -->
        @include('layouts.topbar')
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        @include('layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    
                    <!-- DI SINILAH KONTEN DASHBOARD MASING-MASING ROLE AKAN MUNCUL -->
                    @yield('content')

                </div> <!-- container-fluid -->
            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col fs-13 text-muted text-center">
                            &copy; <script>document.write(new Date().getFullYear())</script> Made with 
                            <span class="mdi mdi-heart text-danger"></span> by <a href="#!" class="text-reset fw-semibold">Zoyothemes</a> 
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>