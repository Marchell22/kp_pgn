<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pgncom</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css')}}">

    <style>
    
</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <img src="{{ asset('img/pertamina.png') }}" alt="Gambar 1" style="margin-left:30px; ">
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <span style="display: flex; font-weight: bold; margin-top: 10px">Terbanggi Besar</span>
                </li>

            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-globe-asia"></i>
                                <p>
                                    Denah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.indexKaryawan') }}" class="nav-link active ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">Overview</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanPertama') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanKedua') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG LAUCHER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanKelima') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CATCHER AREA CP1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanKeempat') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CATCHER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanKetiga') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA CP1</p>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanKeenam') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG LAUNCHER AREA CP1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('logout') }}" class="nav-link ">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout

                                    {{-- <span class="badge badge-info right">6</span> --}}
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <div class="overview-1-parent">
                <img class="overview-1-icon" alt="" src="{{ asset('img/overview.png') }}" />

                <div class="terbanggi-station-besar-parent">
                    <a href=><b class="terbanggi-station-besar">TERBANGGI STATION BESAR</b></a>
                    <a href=><b class="pig-launcher-area">PIG LAUNCHER AREA CP1</b></a>
                </div>
                <div class="terbanggi-station-besar-group">
                    <a href={{ route('admin.karyawan.denahKaryawanKeenam') }}><b class="terbanggi-station-besar">TERBANGGI STATION BESAR</b></a>
                    <a href={{ route('admin.karyawan.denahKaryawanKeenam') }}><b class="pig-launcher-area">SLUG CATCHER AREA </b></a>
                </div>
                <div class="terbanggi-station-besar-container">
                    <a href={{ route('admin.karyawan.denahKaryawanKedua') }}><b
                            class="terbanggi-station-besar">TERBANGGI STATION BESAR</b></a>
                    <a href={{ route('admin.karyawan.denahKaryawanKedua') }}><b class="pig-launcher-area">PIG LAUNCHER
                            AREA </b></a>
                </div>
                <div class="frame-div">
                    <a href={{ route('admin.karyawan.denahKaryawanPertama') }}><b
                            class="terbanggi-station-besar">TERBANGGI STATION BESAR</b></a>
                    <a href={{ route('admin.karyawan.denahKaryawanPertama') }}><b class="pig-launcher-area">PIG RECEIVER
                            AREA </b></a>
                </div>
                <div class="terbanggi-station-besar-parent1">
                    <a href={{ route('admin.karyawan.denahKaryawanKelima') }}><b class="terbanggi-station-besar">TERBANGGI STATION BESAR</b></a>
                    <a href={{ route('admin.karyawan.denahKaryawanKelima') }}><b class="slug-catcher-area">SLUG CATCHER AREA CP1</b></a>
                </div>
                <div class="terbanggi-station-besar-parent2">
                    <a href={{ route('admin.karyawan.denahKaryawanKetiga') }}><b class="terbanggi-station-besar">TERBANGGI STATION BESAR</b></a>
                    <a href={{ route('admin.karyawan.denahKaryawanKetiga') }}><b class="slug-catcher-area">PIG RECEIVER AREA CP1 </b></a>
                </div>
            </div>
        </div>

        @yield('content')
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="">by PGNCOM</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
            </div>
        </footer>

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js')}}/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ('lte/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset ('lte/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset ('lte/dist/js/pages/dashboard.js')}}"></script>

</body>

</html>
