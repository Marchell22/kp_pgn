<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pgncom</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700" />
    <link rel="stylesheet" href="{{ asset('css/globalDenahKeempat.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/indexDenahKeempat.css') }}" />
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
                                    <a href="{{ route('admin.pegawai.denahPertama') }}" class="nav-link ">
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
                                    <a href="{{ route('admin.pegawai.denahKeempat') }}" class="nav-link active">
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
            <div class="slug-catcher-cp2">
                <img class="slug-catcher-cp21" src="{{ asset('img/denahKeempat.png') }}" />
          
                <div class="bv-1330-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="1"><b class="psv-2130a">35-BV-1330</b></a>
                </div>
                <div class="psv-2130a-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="2"><b class="psv-2130a">35-PSV-2130A</b></a>
                </div>
                <div class="psv-2130b-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="3"><b class="psv-2130a">35-PSV-2130B</b></a>
                </div>
                <div class="bv-1414-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="4"><b class="psv-2130a">35-BV-1414</b></a>
                </div>
                <div class="bv-1413-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="5"><b class="psv-2130a">35-BV-1413</b></a>
                </div>
                <div class="plv-1405-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="6"><b class="plv-1405">35-PLV-1405</b></a>
                </div>
                <div class="bv-1412-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="7"><b class="plv-1405">35-BV-1412</b></a>
                </div>
                <div class="bv-1004-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="8"><b class="plv-1405">35-BV-1004</b></a>
                </div>
                <div class="to-terbanggi-besar-station-wrapper">
                    <b class="to-terbanggi-besar">TO TERBANGGI BESAR STATION</b>
                </div>
                <div class="from-main-gas-line-wrapper">
                  <b class="from-main-gas-container">
                    <span class="from-main-gas-container1">
                        <p class="from-main">FROM MAIN</p>
                        <p class="from-main">GAS LINE</p>
                    </span>
                  </b>
                </div>
                <div class="bv-1005-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="9"><b class="plv-1405">35-BV-1005</b></a>
                </div>
                <div class="bv-2102-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="10"><b class="plv-1405">35-BV-2102</b></a>
                </div>
                <div class="bv-2104-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="11"><b class="plv-1405">35-BV-2104</b></a>
                </div>
                <div class="bv-3022-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="12"><b class="plv-1405">35-BV-3022</b></a>
                </div>
                <div class="bv-2107-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="13"><b class="plv-1405">35-BV-2107</b></a>
                </div>
                <div class="plv-2104-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="14"><b class="plv-1405">35-PLV-2104</b></a>
                </div>
                <div class="plv-2105-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="15"><b class="plv-1405">35-PLV-2105</b></a>
                </div>
                <div class="insect-screen-wrapper">
                    <b class="insect-screen">INSECT SCREEN</b>
                </div>
                <div class="flame-arrestor-wrapper">
                    <b class="insect-screen">FLAME ARRESTOR</b>
                </div>
                <div class="bv-1003-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="16"><b class="plv-1405">35-BV-1003</b></a>
                </div>
                <div class="bv-2105-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="17"><b class="plv-1405">35-BV-2105</b></a>
                </div>
                <div class="pi-2160-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="18"><b class="plv-1405">35-PI-2160</b></a>
                </div>
                <div class="pi-2160-container">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="19"><b class="plv-1405">35-PI-2160</b></a>
                </div>
                <div class="flexible-hose-wrapper">
                    <b class="flexible-hose">FLEXIBLE HOSE</b>
                </div>
                <div class="to-open-drain-wrapper">
                    <b class="to-open-drain">TO OPEN DRAIN</b>
                </div>
                <div class="bv-2106-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="20"><b class="plv-1405">35-BV-2106</b></a>
                </div>
                <div class="bv-3024-wrapper">
                  <b class="bv-3024">
                    <span class="bv-3024-txt">
                        <a href="" class="show-modal"onclick="showModal()" data-value-id="20"><p class="from-main">35-BV-</p></a>
                        <a href="" class="show-modal"onclick="showModal()" data-value-id="20"><p class="from-main">3024</p></a>
                    </span>
                  </b>
                </div>
                <div class="bv-3023-wrapper">
                  <b class="bv-3023">
                    <span class="bv-3024-txt">
                        <a href="" class="show-modal"onclick="showModal()" data-value-id="21"><p class="from-main">35-BV-</p></a>
                        <a href="" class="show-modal"onclick="showModal()" data-value-id="21"><p class="from-main">3023</p></a>
                    </span>
                  </b>
                </div>
                <div class="pi-2150-wrapper">
                  <b class="pi-2150">
                    <span class="bv-3024-txt">
                        <a href="" class="show-modal"onclick="showModal()" data-value-id="22"><p class="from-main">35-PI-</p></a>
                        <a href="" class="show-modal"onclick="showModal()" data-value-id="22"><p class="from-main">2150</p></a>
                    </span>
                  </b>
                </div>
                <div class="plv-2106-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="23"><b class="plv-1405">35-PLV-2106</b></a>
                </div>
                <div class="bv-3025-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="24"><b class="plv-1405">35-BV-3025</b></a>
                </div>
                <div class="bv-1031-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="25"><b class="plv-1405">35-BV-1031</b></a>
                </div>
                <div class="pt-2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="26"><b class="plv-1405">35-PT-2130</b></a>
                </div>
                <div class="ckv-1001-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="27"><b class="ckv-1001">35-CKV-1001</b></a>
                </div>
                <div class="from-pig-receiver-35-r-1020-wrapper">
                  <b class="from-pig-receiver-container">
                    <span class="from-main-gas-container1">
                        <p class="from-main">FROM PIG RECEIVER</p>
                        <p class="from-main">35-R-1020</p>
                    </span>
                  </b>
                </div>
                <div class="v-2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="28"><b class="v-2130">35-V-2130</b></a>
                </div>
                <div class="hcv-2136-wrapper">
                    <b class="vent-stack">35-HCV-2136</b>
                </div>
                <div class="bv-3021-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="29"><b class="bv-3021">35-BV-3021</b></a>
                </div>
                <div class="lg-2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="30"><b class="bv-3021">35-LG-2130</b></a>
                </div>
                <div class="lt-2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="31"><b class="bv-3021">35-LT-2130</b></a>
                </div>
                <div class="ckv-2103-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="32"><b class="vent-stack">35-CKV-2103</b></a>
                </div>
                <div class="ckv-2104-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="33"><b class="vent-stack">35-CKV-2104</b></a>
                </div>
                <div class="ckv-2105-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="34"><b class="vent-stack">35-CKV-2105</b></a>
                </div>
                <div class="ssv-2130-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="35"><b class="vent-stack">35-SSV-2130</b></a>
                </div>
                <div class="ssv-2131-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="36"><b class="vent-stack">35-SSV-2131</b></a>
                </div>
                <div class="v-2140-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="37"><b class="v-2140">35-V-2140</b></a>
                </div>
                <div class="vent-stack-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="38"><b class="vent-stack">VENT STACK</b></a>
                </div>
                <div class="lg-2120-wrapper">
                    <a href="" class="show-modal"onclick="showModal()" data-value-id="39"><b class="vent-stack">35-LG-2120</b></a>
                </div>
              </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <form action="{{ route('admin.submitDenahKeempat') }}" method='post'>
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
                url: '/admin/denahKeempat/getDataKeempat', // Replace with the correct route
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