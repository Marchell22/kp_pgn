<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pgncom</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700" />
    <link rel="stylesheet" href="{{ asset('css/globalDenahPertama.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/indexDenahPertama.css') }}" />
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
                                    <a href="{{ route('admin.pegawai.denahPertama') }}" class="nav-link active">
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
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CAUTCHER AREA CP1</p>
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
                                <li class="nav-item">
                                    <a href="{{ route('admin.pegawai.denahKeempat') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size: 13px;">SLUG CATCHER AREA CP2</p>
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
            <div class="entahlah-transformed-parent">
                <img class="entahlah-transformed-icon" alt="" src="{{ asset('img/denahPertama.png') }}" />
                <div class="pi-1022-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="1"><b
                            class="pi-1020b">35-PI-1022</b></a>
                </div>
                <div class="ti-1022-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="2"><b
                            class="pi-1020b">35-TI-1022</b></a>
                </div>
                <div class="bv-1022-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="3"><b
                            class="bv-1022">35-BV-1022</b></a>
                </div>
                <div class="pt-1031a-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="4"><b
                            class="pt-1031a">35-PT-1031A</b></a>
                </div>
                <div class="pt-1031b-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="5"><b
                            class="pt-1031a">35-PT-1031B</b></a>
                </div>
                <div class="pt-1031c-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="6"><b
                            class="pt-1031a">35-PT-1031C</b></a>
                </div>
                <div class="tt-1020-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="7"><b
                            class="tt-1020">35-TT-1020</b></a>
                </div>
                <div class="ti-1020-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="8"><b
                            class="tt-1020">35-TI-1020</b></a>
                </div>
                <div class="plv-3005-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="9"><b
                            class="pt-1031a">35-PLV-3005</b></a>
                </div>
                <div class="plv-3006-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="10"><b
                            class="plv-3006">35-PLV-3006</b></a>
                </div>
                <div class="gtv-1401-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="11"><b
                            class="gtv-1401">35-GTV-1401</b></a>
                </div>
                <div class="plv-1401-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="12"><b
                            class="plv-3006">35-PLV-1401</b></a>
                </div>
                <div class="plv-1002-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="13"><b
                            class="plv-3006">35-PLV-1002</b></a>
                </div>
                <div class="plv-1003-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="14"><b
                            class="plv-3006">35-PLV-1003</b></a>
                </div>
                <div class="zsc-1025-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="15"><b
                            class="plv-3006">35-ZSC-1025</b></a>
                </div>
                <div class="bv-1401-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="16"><b
                            class="gtv-1401">35-BV-1401</b></a>
                </div>
                <div class="bv-1402-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="17"><b class="bv-1402">
                            <p class="p">35</p>
                            <p class="p">BV</p>
                            <p class="p">1402</p>
                        </b></a>
                </div>
                <div class="plv-1401-container">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="17"><b
                            class="plv-3006">35-PLV-1401</b></a>
                </div>
                <div class="psv-1020-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="18"><b
                            class="plv-3006">35-PSV-1020</b></a>
                </div>
                <div class="pi-1020b-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="19"><b
                            class="pi-1020b">35-PI-1020B</b></a>
                </div>
                <div class="pi-1020b-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="20"><b
                            class="pi-1020b">35-PI-1020B</b></a>
                </div>
                <div class="bv-1002-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="21"><b
                            class="gtv-1401">35-BV-1002</b></a>
                </div>
                <div class="bv-1002-container">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="22"><b
                            class="gtv-1401">35-BV-1002</b></a>
                </div>
                <div class="zs-1021-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="23"><b
                            class="gtv-1401">35-ZS-1021</b></a>
                </div>
                <div class="hcv-1020-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="24"><b
                            class="hcv-1020">35-HCV-1020</b></a>
                </div>
                <div class="bv-1002-frame">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="25"><b
                            class="bv-10022">35-BV-1002</b></a>
                </div>
                <div class="bv-1001-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="26"><b
                            class="gtv-1401">35-BV-1001</b></a>
                </div>
                <div class="bv-1403-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="27"><b
                            class="bv-1403">35-BV-1403</b></a>
                </div>
                <div class="plv-1402-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="28"><b
                            class="plv-1402">35-PLV-1402</b></a>
                </div>
                <div class="blowdown-to-atm-wrapper">
                    <b class="blowdown-to-atm">BLOWDOWN TO
                        ATM</b>
                </div>
                <div class="pi-1025-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="30"><b
                            class="pi-1025">35-PI-1025</b></a>
                </div>
                <div class="bv-3002-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="31"><b
                            class="bv-3002">35-BV-3002</b></a>
                </div>
                <div class="bv-3001-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="32"><b
                            class="bv-3002">35-BV-3001</b></a>
                </div>
                <div class="pt-1021-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="33"><b
                            class="bv-3002">35-PT-1021</b></a>
                </div>
                <div class="zs-1020-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="34"><b
                            class="bv-3002">35-ZS-1020</b></a>
                </div>
                <div class="plv-3003-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="35"><b
                            class="plv-3003">35-PLV-3003</b></a>
                </div>
                <div class="bv-3005-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="36"><b
                            class="plv-3003">35-BV-3005</b></a>
                </div>
                <div class="hcv-1021-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="37"><b
                            class="plv-3003">35-HCV-1021</b></a>
                </div>
                <div class="plv-3004-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="38"><b
                            class="plv-3003">35-PLV-3004</b></a>
                </div>
                <div class="bv-3006-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="39"><b
                            class="plv-3003">35-BV-3006</b></a>
                </div>
                <div class="frame-div">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="40"><b
                            class="bv-10023">35-BV-1002</b></a>
                </div>
                <div class="bv-1002-wrapper1">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="41"><b
                            class="bv-10023">35-BV-1002</b></a>
                </div>
                <div class="plv-1001-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="42"><b
                            class="plv-3006">35-PLV-1001</b></a>
                </div>
                <div class="pi-1020a-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="43"><b
                            class="pi-1020b">35-PI-1020A</b></a>
                </div>
                <div class="r-1020-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="44"><b
                            class="r-1020">35-R-1020</b></a>
                </div>
                <div class="vent-atm-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="45"><b class="vent-atm">
                            <p class="p">VENT</p>
                            <p class="p">ATM</p>
                        </b></a>
                </div>

                <div class="to-sump-tank-parent">
                    <b class="to-sump-tank">TO SUMP TANK</b><b class="v-2140">35-V-2140</b>
                </div>
                <div class="to-pig-launcher-parent">
                    <b class="to-pig-launcher">TO PIG
                        LAUNCHER</b><b class="l-1320">35-L-1320</b>
                </div>
                <div class="plv-3010-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="49"><b
                            class="plv-3006">35-PLV-3010</b></a>
                </div>
                <div class="plv-3009-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="50"><b
                            class="plv-3009">35-PLV-3009</b></a>
                </div>
                <div class="sdv-1023-wrapper">
                    <a href="" class="show-modal" onclick="showModal()" data-value-id="51"><b
                            class="plv-3009">35-SDV-1023</b></a>
                </div>
                <div class="from-pig-launcher-parent">
                    <b class="from-pig-launcher">FROM PIG
                        LAUNCHER</b><b class="l-13201">33-L-1320</b>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>

                <form action="{{ route('admin.submitDenahPertama') }}" method='post'>
                    @csrf
                    <input type="text" id="value_id_input" name="value_id" style="display: none;">
                     <p id="modalValueText"style="font-weight: bold; margin-left : 300px"></p>
                    <table class="table table-bordered bordered" id="table" data-id="1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                                <th><a href="javascript:void(0)" class="btn btn-success btn-sm addRow">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
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
            var labelText = this.querySelector('b').innerText;
            // Tampilkan nilai di dalam modal
            var modalValueText = document.getElementById('modalValueText');
            modalValueText.textContent = labelText;
            $.ajax({
                url: '/admin/denahPertama/getDataPertama', // Replace with the correct route
                method: 'GET',
                data: {
                    valueId: valueId
                },
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

        // Function to populate the table body with data
        function populateTableBody(data) {
            var tbody = $('tbody');
            tbody.empty(); // Clear existing rows
            console.log(data.length)
            data.sort(function (a, b) {
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
                                <input type='text' name="name[]" placeholder="Masukan Nama" class="form-control" value="${names[j]}">        
                            </td>
                            <td>
                                <input type='text' name="value[]" placeholder="Masukan Data" class="form-control" value="${values[j]}">
                            </td>
                            <td><a href="javascript:void(0)" class="btn btn-danger btn-sm deleteRow">-</a></td>
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
        $('thead').on('click', '.addRow', function () {
            var tr = `<tr>
                <td>
                    <input type='text' name="name[]" placeholder="Masukan Nama" class="form-control">        
                </td>
                <td>
                    <input type='text' name="value[]" placeholder="Masukan Data" class="form-control">
                </td>
                <td><a href="javascript:void(0)" class="btn btn-danger btn-sm deleteRow">-</a></td>
            </tr>`;
            $('tbody').append(tr);
        });

        $('tbody').on('click', '.deleteRow', function () {
            $(this).parent().parent().remove();
        });

    </script>


</body>

</html>
