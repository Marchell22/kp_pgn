<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pgncom</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700" />
    <link rel="stylesheet" href="{{ asset('css/globalDenahKedua.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/indexDenahKedua.css') }}" />
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

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
                                    <a href="{{ route('admin.pegawai.dashboard') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">Overview</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahPertama') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahKedua') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG LAUCHER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CAUTCHER AREA CP1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG LAUNCHER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA CP1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG LAUNCHER AREA CP1</p>
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
            <div class="denahkedua-1-parent">
                <img class="denahkedua-1-icon" alt="" src="{{ asset('img/denahKedua.png') }}" />

                <div class="blowdown-to-atm-wrapper">
                    <b class="blowdown-to-atm">BLOWDOWN TO ATM</b>
                </div>
                <div class="plv-3014-wrapper">
                    <b class="plv-3014">35-PLV-3014</b>
                </div>
                <div class="ft-2030-wrapper">
                    <b class="ft-2030">35-FT-2030</b>
                </div>
                <div class="hcv-2030-wrapper">
                    <b class="hcv-2030">35-HCV-2030</b>
                </div>
                <div class="bv-3019-wrapper">
                    <b class="bv-3019">35-BV-3019</b>
                </div>
                <div class="plv-3013-wrapper">
                    <b class="plv-3013">35-PLV-3013</b>
                </div>
                <div class="bv-1407-wrapper">
                    <b class="bv-3019">35-BV-1407</b>
                </div>
                <div class="bv-1302-wrapper">
                    <b class="bv-3019">35-BV-1302</b>
                </div>
                <div class="hcv-1327-wrapper">
                    <b class="hcv-1327">35-HCV-1327</b>
                </div>
                <div class="bv-1408-wrapper">
                    <b class="bv-3019">35-BV-1408</b>
                </div>
                <div class="bv-1303-wrapper">
                    <b class="bv-3019">35-BV-1303</b>
                </div>
                <div class="from-slug-catcher-35-v-2130-wrapper">
                    <b class="from-pig-launcher-37-r-1020-container">
                        <span class="from-slug-catcher-35-v-2130-tx-container">
                            <p class="from-slug">FROM SLUG</p>
                            <p class="from-slug">CATCHER</p>
                            <p class="from-slug">35-V-2130</p>
                        </span>
                    </b>
                </div>
                <div class="tp-3560-wrapper">
                    <b class="tp-3560">
                        <span class="tp-3560-txt">
                            <p class="from-slug">TP</p>
                            <p class="from-slug">3560</p>
                        </span>
                    </b>
                </div>
                <div class="tp-3350-wrapper">
                    <b class="tp-3560">
                        <span class="tp-3560-txt">
                            <p class="from-slug">TP</p>
                            <p class="from-slug">3350</p>
                        </span>
                    </b>
                </div>
                <div class="to-slug-catcher-35-v2130-wrapper">
                    <b class="from-pig-launcher-37-r-1020-container">
                        <span class="from-slug-catcher-35-v-2130-tx-container">
                            <p class="from-slug">TO SLUG</p>
                            <p class="from-slug">CATCHER</p>
                            <p class="from-slug">35-V-2130</p>
                        </span>
                    </b>
                </div>
                <div class="from-pig-launcher-37-r-1020-wrapper">
                    <b class="from-pig-launcher-37-r-1020-container">
                        <span class="from-slug-catcher-35-v-2130-tx-container">
                            <p class="from-slug">FROM PIG LAUNCHER</p>
                            <p class="from-slug">37-R-1020</p>
                        </span>
                    </b>
                </div>
                <div class="to-pig-receiver-35-r-1020-wrapper">
                    <b class="from-pig-launcher-37-r-1020-container">
                        <span class="from-slug-catcher-35-v-2130-tx-container">
                            <p class="from-slug">TO PIG RECEIVER</p>
                            <p class="from-slug">35-R-1020</p>
                        </span>
                    </b>
                </div>
                <div class="future-connection-for-add-gas-wrapper">
                    <b class="future-connection-for-add-container">
                        <span class="from-slug-catcher-35-v-2130-tx-container">
                            <p class="from-slug ">FUTURE</p>
                            <p class="from-slug">CONNECTION</p>
                            <p class="from-slug">FOR ADD GAS</p>
                            <p class="from-slug">COMPROSSER</p>
                        </span>
                    </b>
                </div>
                <div class="gas-engine-generator-wrapper">
                    <b class="gas-engine-generator">
                        <span class="from-slug-catcher-35-v-2130-tx-container">
                            <p class="from-slug">GAS ENGINE</p>
                            <p class="from-slug">GENERATOR</p>
                        </span>
                    </b>
                </div>
                <div class="bv-2001-wrapper">
                    <b class="bv-3019">35-BV-2001</b>
                </div>
                <div class="bv-3013-wrapper">
                    <b class="bv-3019">35-BV-3013</b>
                </div>
                <div class="plv-3009-wrapper">
                    <b class="plv-3013">35-PLV-3009</b>
                </div>
                <div class="plv-3010-wrapper">
                    <b class="plv-3013">35-PLV-3010</b>
                </div>
                <div class="hcv-1325-wrapper">
                    <b class="hcv-1327">35-HCV-1325</b>
                </div>
                <div class="bv-1301-wrapper">
                    <b class="bv-1301">35-BV-1301</b>
                </div>
                <div class="bv-1304-wrapper">
                    <b class="bv-1301">35-BV-1304</b>
                </div>
                <div class="hcv-1324-wrapper">
                    <b class="hcv-1324">35-HCV-1324</b>
                </div>
                <div class="plv-3011-wrapper">
                    <b class="plv-3011">35-PLV-3011</b>
                </div>
                <div class="bv-3015-wrapper">
                    <b class="bv-3015">35-BV-3015</b>
                </div>
                <div class="bv-3016-wrapper">
                    <b class="bv-3016">35-BV-3016</b>
                </div>
                <div class="bv-1302-container">
                    <b class="bv-3016">35-BV-1302</b>
                </div>
                <div class="bv-1326-wrapper">
                    <b class="bv-3016">35-BV-1326</b>
                </div>
                <div class="plv-3012-wrapper">
                    <b class="plv-3012">35-PLV-3012</b>
                </div>
                <div class="bv-1322-wrapper">
                    <b class="bv-1322">35-BV-1322</b>
                </div>
                <div class="plv-2101-wrapper">
                    <b class="plv-3012">35-PLV-2101</b>
                </div>
                <div class="bv-2101-wrapper">
                    <b class="bv-1322">35-BV-2101</b>
                </div>
                <div class="plv-2103-wrapper">
                    <b class="plv-2103">35-PLV-2103</b>
                </div>
                <div class="plv-1303-wrapper">
                    <b class="plv-2103">35-PLV-1303</b>
                </div>
                <div class="zsc-1320-wrapper">
                    <b class="plv-2103">35-ZSC-1320</b>
                </div>
                <div class="psv-1405-wrapper">
                    <b class="plv-2103">35-PSV-1405</b>
                </div>
                <div class="bv-1404-wrapper">
                    <b class="bv-3015">35-BV-1404</b>
                </div>
                <div class="psv-1403-wrapper">
                    <b class="plv-2103">35-PSV-1403</b>
                </div>
                <div class="psv-1320-wrapper">
                    <b class="plv-2103">35-PSV-1320</b>
                </div>
                <div class="pi-1320a-wrapper">
                    <b class="pi-1320a">35-PI-1320A</b>
                </div>
                <div class="pi-1320b-wrapper">
                    <b class="pi-1320a">35-PI-1320B</b>
                </div>
                <div class="l-1320-wrapper">
                    <b class="l-1320">35-L-1320</b>
                </div>
                <div class="bv-1301-container">
                    <b class="bv-13011">35-BV-1301</b>
                </div>
                <div class="zs-1320-wrapper">
                    <b class="bv-1301">35-ZS-1320</b>
                </div>
                <div class="plv-1404-wrapper">
                    <b class="l-1320">35-PLV-1404</b>
                </div>
                <div class="pi-1328-wrapper">
                    <b class="bv-1322">35-PI-1328</b>
                </div>
                <div class="pt-1322-wrapper">
                    <b class="bv-1322">35-PT-1322</b>
                </div>
                <div class="zs-1310-wrapper">
                    <b class="bv-13011">35-ZS-1310</b>
                </div>
                <div class="plv-1406-wrapper">
                    <b class="plv-1406">35-PLV-1406</b>
                </div>
                <div class="plv-3014-container">
                    <b class="plv-30141">35-PLV-3014</b>
                </div>
                <div class="plv-3020-wrapper">
                    <b class="plv-3014">35-PLV-3020</b>
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