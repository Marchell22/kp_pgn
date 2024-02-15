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
    margin: 10% auto; /* Mengurangi margin agar modal lebih muncul di tengah */
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-height: 80vh; /* Menentukan tinggi maksimum modal sesuai dengan tinggi layar */
    overflow-y: auto; /* Menambahkan overflow-y agar dapat di-scroll jika kontennya lebih panjang */
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
                width: 50%; /* Mengubah lebar modal pada layar yang lebih besar */
                margin-left: 30%; 
            }
        }

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
      
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
                                    <a href="{{ route('admin.karyawan.indexKaryawan') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">Overview</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanPertama') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG RECEIVER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.karyawan.denahKaryawanKedua') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">PIG LAUCHER AREA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CAUTCHER AREA CP1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
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
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="1"><b class="blowdown-to-atm">BLOWDOWN TO ATM</b></a>
                </div>
                <div class="plv-3014-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="2"><b class="plv-3014">35-PLV-3014</b></a>
                </div>
                <div class="ft-2030-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="3"><b class="ft-2030">35-FT-2030</b></a>
                </div>
                <div class="hcv-2030-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="4"><b class="hcv-2030">35-HCV-2030</b></a>
                </div>
                <div class="bv-3019-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="5"><b class="bv-3019">35-BV-3019</b></a>
                </div>
                <div class="plv-3013-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="6"><b class="plv-3013">35-PLV-3013</b></a>
                </div>
                <div class="bv-1407-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="7"><b class="bv-3019">35-BV-1407</b></a>
                </div>
                <div class="bv-1302-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="8"><b class="bv-3019">35-BV-1302</b></a>
                </div>
                <div class="hcv-1327-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="9"><b class="hcv-1327">35-HCV-1327</b></a>
                </div>
                <div class="bv-1408-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="10"><b class="bv-3019">35-BV-1408</b></a>
                </div>
                <div class="bv-1303-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="11"><b class="bv-3019">35-BV-1303</b></a>
                </div>
                <div class="from-slug-catcher-35-v-2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="12"><b class="from-pig-launcher-37-r-1020-container">
                            <span class="from-slug-catcher-35-v-2130-tx-container">
                                <p class="from-slug">FROM SLUG</p>
                                <p class="from-slug">CATCHER</p>
                                <p class="from-slug">35-V-2130</p>
                            </span>
                        </b></a>
                </div>
                <div class="tp-3560-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="13"><b class="tp-3560">
                            <span class="tp-3560-txt">
                                <p class="from-slug">TP</p>
                                <p class="from-slug">3560</p>
                            </span>
                        </b></a>
                </div>
                <div class="tp-3350-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="14"><b class="tp-3560">
                            <span class="tp-3560-txt">
                                <p class="from-slug">TP</p>
                                <p class="from-slug">3350</p>
                            </span>
                        </b></a>
                </div>
                <div class="to-slug-catcher-35-v2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="15"><b class="from-pig-launcher-37-r-1020-container">
                            <span class="from-slug-catcher-35-v-2130-tx-container">
                                <p class="from-slug">TO SLUG</p>
                                <p class="from-slug">CATCHER</p>
                                <p class="from-slug">35-V-2130</p>
                            </span>
                        </b></a>
                </div>
                <div class="from-pig-launcher-37-r-1020-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="16"><b class="from-pig-launcher-37-r-1020-container">
                            <span class="from-slug-catcher-35-v-2130-tx-container">
                                <p class="from-slug">FROM PIGLAUNCHER</p>
                                <p class="from-slug">37-R-1020</p>
                            </span>
                        </b></a>
                </div>
                <div class="to-pig-receiver-35-r-1020-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="17"><b class="from-pig-launcher-37-r-1020-container">
                            <span class="from-slug-catcher-35-v-2130-tx-container">
                                <p class="from-slug">TO PIGRECEIVER</p>
                                <p class="from-slug">35-R-1020</p>
                            </span>
                        </b></a>
                </div>
                <div class="future-connection-for-add-gas-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="18"><b class="future-connection-for-add-container">
                            <span class="from-slug-catcher-35-v-2130-tx-container">
                                <p class="from-slug ">FUTURE</p>
                                <p class="from-slug">CONNECTION</p>
                                <p class="from-slug">FOR ADD GAS</p>
                                <p class="from-slug">COMPROSSER</p>
                            </span>
                        </b></a>
                </div>
                <div class="gas-engine-generator-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="19"><b class="gas-engine-generator">
                            <span class="from-slug-catcher-35-v-2130-tx-container">
                                <p class="from-slug">GAS ENGINE</p>
                                <p class="from-slug">GENERATOR</p>
                            </span>
                        </b></a>
                </div>
                <div class="bv-2001-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="20"><b class="bv-3019">35-BV-2001</b></a>
                </div>
                <div class="bv-3013-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="21"><b class="bv-3019">35-BV-3013</b></a>
                </div>
                <div class="plv-3009-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="22"><b class="plv-3013">35-PLV-3009</b></a>
                </div>
                <div class="plv-3010-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="23"><b class="plv-3013">35-PLV-3010</b></a>
                </div>
                <div class="hcv-1325-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="24"><b class="hcv-1327">35-HCV-1325</b></a>
                </div>
                <div class="bv-1301-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="25"><b class="bv-1301">35-BV-1301</b></a>
                </div>
                <div class="bv-1304-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="26"><b class="bv-1301">35-BV-1304</b></a>
                </div>
                <div class="hcv-1324-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="27"><b class="hcv-1324">35-HCV-1324</b></a>
                </div>
                <div class="plv-3011-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="28"><b class="plv-3011">35-PLV-3011</b></a>
                </div>
                <div class="bv-3015-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="29"><b class="bv-3015">35-BV-3015</b></a>
                </div>
                <div class="bv-3016-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="30"><b class="bv-3016">35-BV-3016</b></a>
                </div>
                <div class="bv-1302-container">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="31"><b class="bv-3016">35-BV-1302</b></a>
                </div>
                <div class="bv-1326-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="32"><b class="bv-3016">35-BV-1326</b></a>
                </div>
                <div class="plv-3012-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="33"><b class="plv-3012">35-PLV-3012</b></a>
                </div>
                <div class="bv-1322-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="34"><b class="bv-1322">35-BV-1322</b></a>
                </div>
                <div class="plv-2101-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="35"><b class="plv-3012">35-PLV-2101</b></a>
                </div>
                <div class="bv-2101-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="36"><b class="bv-1322">35-BV-2101</b></a>
                </div>
                <div class="plv-2103-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="37"><b class="plv-2103">35-PLV-2103</b></a>
                </div>
                <div class="plv-1303-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="38"><b class="plv-2103">35-PLV-1303</b></a>
                </div>
                <div class="zsc-1320-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="39"><b class="plv-2103">35-ZSC-1320</b></a>
                </div>
                <div class="psv-1405-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="40"><b class="plv-2103">35-PSV-1405</b></a>
                </div>
                <div class="bv-1404-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="41"><b class="bv-3015">35-BV-1404</b></a>
                </div>
                <div class="psv-1403-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="42"><b class="plv-2103">35-PSV-1403</b></a>
                </div>
                <div class="psv-1320-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="43"><b class="plv-2103">35-PSV-1320</b></a>
                </div>
                <div class="pi-1320a-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="44"><b class="pi-1320a">35-PI-1320A</b></a>
                </div>
                <div class="pi-1320b-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="45"><b class="pi-1320a">35-PI-1320B</b></a>
                </div>
                <div class="l-1320-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="46"><b class="l-1320">35-L-1320</b></a>
                </div>
                <div class="bv-1301-container">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="47"><b class="bv-13011">35-BV-1301</b></a>
                </div>
                <div class="zs-1320-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="48"><b class="bv-1301">35-ZS-1320</b></a>
                </div>
                <div class="plv-1404-wrapper">
                    <a href=""  class="show-modal"onclick="showModal()"  data-value-id="49"><b class="l-1320">35-PLV-1404</b></a>
                </div>
                <div class="pi-1328-wrapper">
                    <a href="" class="show-modal" onclick="showModal()"  data-value-id="50"><b class="bv-1322">35-PI-1328</b></a>
                </div>
                <div class="pt-1322-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="51"><b class="bv-1322">35-PT-1322</b></a>
                </div>
                <div class="zs-1310-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="52"><b class="bv-13011">35-ZS-1310</b></a>
                </div>
                <div class="plv-1406-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="53"><b class="plv-1406">35-PLV-1406</b></a>
                </div>
                <div class="plv-3014-container">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="54"><b class="plv-30141">35-PLV-3014</b></a>
                </div>
                <div class="plv-3020-wrapper">
                    <a href="" class="show-modal"onclick="showModal()"  data-value-id="55"><b class="plv-3014">35-PLV-3020</b></a>
                </div>
            </div>
        </div>
                <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <form action="" method=''>
                    {{-- @csrf --}}
                    <input type="text" id="value_id_input" name="value_id" style="display: none;">
                    <table class="table table-bordered bordered" id ="table" data-id="1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>   
                    </table>
                    
                </form>
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
       <script>
        // Temukan elemen-elemen yang diperlukan
        var modal = document.getElementById('myModal');
        var showModalBtns = document.getElementsByClassName('show-modal');
        var span = document.getElementsByClassName('close')[0];
        var valueIdInput = document.getElementById('value_id_input');

        // Fungsi untuk menampilkan modal
        function showModal(event) {
            event.preventDefault(); // Menahan perilaku asli dari tautan
            var valueId = this.getAttribute('data-value-id');
            valueIdInput.value = valueId;
            // modal.style.display = 'block';
            $.ajax({
                url: '/admin/denahKeduaKaryawan/getData', // Replace with the correct route
                method: 'GET',
                data: { valueId: valueId },
                success: function (data) {
                    // Populate the table body with data
                    populateTableBody(data);
                    console.log(data)
                    modal.style.display = 'block';
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        }

        // // Function to populate the table body with data
        function populateTableBody(data) {
            var tbody = $('tbody');
            tbody.empty(); // Clear existing rows
            console.log(data.length)
            data.sort(function(a, b) {
                return new Date(b.created_at) - new Date(a.created_at);
            });
        
            // Add new rows based on fetched data
            for (var i = 0; i < data.length; i++) {
                var names = JSON.parse(data[i].name);
                var values = JSON.parse(data[i].value);
                console.log(names);
                if (names && values) {
                    for (var j = 0; j < names.length; j++) {
                        var tr = `<tr>
                            <td>
                                <input type='text' name="name[]" placeholder="Masukan Nama" class="form-control" value="${names[j]}" readonly>        
                            </td>
                            <td>
                                <input type='text' name="value[]" placeholder="Masukan Data" class="form-control" value="${values[j]}" readonly>
                            </td>
                        </tr>`;
                        tbody.append(tr);
                    }
                }
            }
        
            // Add an empty row for adding new data
            // var emptyRow = `<tr>
            //     <td>
            //         <input type='text' name="name[]" placeholder="Masukan Nama" class="form-control">        
            //     </td>
            //     <td>
            //         <input type='text' name="value[]" placeholder="Masukan Data" class="form-control">
            //     </td>
            //     <td><a href="javascript:void(0)" class="btn btn-success btn-sm addRow">+</a></td>
            // </tr>`;
            // tbody.append(emptyRow);
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            modal.style.display = 'none';
        }

        // Tambahkan event listener ke setiap elemen <a>
        for (var i = 0; i < showModalBtns.length; i++) {
            showModalBtns[i].addEventListener('click', function (event) {
                showModal.call(this, event);
            });
        }

        // Tambahkan event listener ke tombol close
        span.addEventListener('click', closeModal);

        // Tambahkan event listener untuk menutup modal saat mengklik di luar modal
        // window.addEventListener('click', function (event) {
        //     if (event.target == modal) {
        //         closeModal();
        //     }
        // });

    </script>
    <script>
</script>

</body>

</html>
