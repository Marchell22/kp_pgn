<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pgncom</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700" />
    <link rel="stylesheet" href="{{ asset('css/globalDenahKetiga.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/indexDenahKetiga.css') }}" />
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
    <style>
        /* Tambahkan CSS untuk styling modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Style untuk konten modal */
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            /* Mengurangi margin agar modal lebih muncul di tengah */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-height: 80vh;
            /* Menentukan tinggi maksimum modal sesuai dengan tinggi layar */
            overflow-y: auto;
            /* Menambahkan overflow-y agar dapat di-scroll jika kontennya lebih panjang */
        }

        /* Style untuk tombol close */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .modal-content {
                width: 50%;
                /* Mengubah lebar modal pada layar yang lebih besar */
                margin-left: 30%;
            }
        }

        .hidden-input {
            display: none;
        }

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
                                    <a href="{{ route('admin.pegawai.denahPertama') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahKedua') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG LAUCHER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahKelima') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CATCHER AREA CP1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahKeempat') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CATCHER AREA</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahKetiga') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA CP1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG LAUNCHER AREA CP1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @if(auth()->user()->role=='admin')
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Akun
                                    <i class="fas fa-angle-left right"></i>
                                    {{-- <span class="badge badge-info right">6</span> --}}
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelola Akun</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.user.create') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Akun</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
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
            <div class="pig-receiver-1-parent">
                <img class="pig-receiver-1" alt="" src="{{ asset('img/denahKetiga.png') }}" />

                <div class="zi-1061-wrapper">
                    <b class="zi-1061">35-ZI-1061</b>
                </div>
                <div class="hcv-1072-wrapper">
                    <b class="hcv-1072">35-HCV-1072</b>
                </div>
                <div class="zi-1062-wrapper">
                    <b class="zi-1062">35-ZI-1062</b>
                </div>
                <div class="plv-1061-wrapper">
                    <b class="plv-1061">35-PLV-1061</b>
                </div>
                <div class="bv-2161-wrapper">
                    <b class="bv-2161">35-BV-2161</b>
                </div>
                <div class="plv-2161-wrapper">
                    <b class="bv-2161">35-PLV-2161</b>
                </div>
                <div class="plv-1461-wrapper">
                    <b class="plv-1461">35-PLV-1461</b>
                </div>
                <div class="bv-1461-wrapper">
                    <b class="bv-1461">35-BV-1461</b>
                </div>
                <div class="r-1010-wrapper">
                    <b class="r-1010">35-R-1010</b>
                </div>
                <div class="pt-1063-wrapper">
                    <b class="pt-1063">35-PT-1063</b>
                </div>
                <div class="sdv-1081-parent">
                    <b class="sdv-1081">
                        <p class="sdv-10811">35-SDV-1081</p>
                    </b>
                    <b class="pt-1081">35-PT-1081</b>
                </div>
                <div class="v-2140-wrapper">
                    <b class="v-2140">35-V-2140</b>
                </div>
                <div class="pt-1062-wrapper">
                    <b class="pt-1063">35-PT-1062</b>
                </div>
                <div class="pt-1061-wrapper">
                    <b class="pt-1063">35-PT-1061</b>
                </div>
                <div class="tt-1061-wrapper">
                    <b class="pt-1063">35-TT-1061</b>
                </div>
                <div class="bv-1062-wrapper">
                    <b class="bv-1062">35-BV-1062</b>
                </div>
                <div class="hcv-1071-wrapper">
                    <b class="hcv-1071">35-HCV-1071</b>
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
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
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
