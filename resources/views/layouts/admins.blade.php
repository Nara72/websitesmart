<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Siswa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{
                asset('template/plugins/fontawesome-free/css/all.min.css')
            }}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{
                asset(
                    'template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'
                )
            }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60" />
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/profile" class="brand-link">
                <i class="fa-solid fa-user mr-2 ml-2"></i>
                <span class="brand-text font-weight-dark">{{ Auth::user()->name }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->
                <div class="form-inline">

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/dashboard" class="nav-link">
                                        <i class="fas fa-search mr-2"></i>
                                        <p>Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/tambahdata" class="nav-link">
                                        <i class="fas fa-user-graduate mr-2"></i>
                                        <p>Create Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2024 M. Ibnu Rafi</strong>
            <div class="float-right d-none d-sm-inline-block"></div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{
                asset('template/plugins/jquery/jquery.min.js')
            }}"></script>
    <!-- Bootstrap -->
    <script src="{{
                asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')
            }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{
                asset(
                    'template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'
                )
            }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{
                asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js')
            }}"></script>
    <script src="{{
                asset('template/plugins/raphael/raphael.min.js')
            }}"></script>
    <script src="{{
                asset('template/plugins/jquery-mapael/jquery.mapael.min.js')
            }}"></script>
    <script src="{{
                asset('template/plugins/jquery-mapael/maps/usa_states.min.js')
            }}"></script>
    <!-- ChartJS -->
    <script src="{{
                asset('template/plugins/chart.js/Chart.min.js')
            }}"></script>

    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{
                asset('template/dist/js/pages/dashboard2.js')
            }}"></script>
</body>

</html>