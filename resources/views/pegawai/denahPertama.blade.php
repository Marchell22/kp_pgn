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
            <div class="entahlah-transformed-parent">
                <img class="entahlah-transformed-icon" alt="" src="{{ asset('img/denahPertama.png') }}" />
                <div class="pi-1022-wrapper">
                    <a href="#" class="show-modal" onclick="showModal(event, 1)"><b class="pi-1020b">35-PI-1022</b></a>
                </div>
                <div class="ti-1022-wrapper">
                    <a href=""  class="show-modal(2)"onclick="showModal()"><b class="pi-1020b">35-TI-1022</b></a>
                </div>
                <div class="bv-1022-wrapper">
                    <a href=""  class="show-modal(3)"onclick="showModal()"><b class="bv-1022">35-BV-1022</b></a>
                </div>
                <div class="pt-1031a-wrapper">
                    <a href=""  class="show-modal(4)"onclick="showModal()"><b class="pt-1031a">35-PT-1031A</b></a>
                </div>
                <div class="pt-1031b-wrapper">
                    <a href=""  class="show-modal(5)"onclick="showModal()"><b class="pt-1031a">35-PT-1031B</b></a>
                </div>
                <div class="pt-1031c-wrapper">
                    <a href=""  class="show-modal(6)"onclick="showModal()"><b class="pt-1031a">35-PT-1031C</b></a>
                </div>
                <div class="tt-1020-wrapper">
                    <a href=""  class="show-modal(7)"onclick="showModal()"><b class="tt-1020">35-TT-1020</b></a>
                </div>
                <div class="ti-1020-wrapper">
                    <a href=""  class="show-modal(8)"onclick="showModal()"><b class="tt-1020">35-TI-1020</b></a>
                </div>
                <div class="plv-3005-wrapper">
                    <a href=""  class="show-modal(9)"onclick="showModal()"><b class="pt-1031a">35-PLV-3005</b></a>
                </div>
                <div class="plv-3006-wrapper">
                    <a href=""  class="show-modal(10)"onclick="showModal()"><b class="plv-3006">35-PLV-3006</b></a>
                </div>
                <div class="gtv-1401-wrapper">
                    <a href=""  class="show-modal(11)"onclick="showModal()"><b class="gtv-1401">35-GTV-1401</b></a>
                </div>
                <div class="plv-1401-wrapper">
                    <a href=""  class="show-modal(12)"onclick="showModal()"><b class="plv-3006">35-PLV-1401</b></a>
                </div>
                <div class="plv-1002-wrapper">
                    <a href=""  class="show-modal(13)"onclick="showModal()"><b class="plv-3006">35-PLV-1002</b></a>
                </div>
                <div class="plv-1003-wrapper">
                    <a href=""  class="show-modal(14)"onclick="showModal()"><b class="plv-3006">35-PLV-1003</b></a>
                </div>
                <div class="zsc-1025-wrapper">
                    <a href=""  class="show-modal(15)"onclick="showModal()"><b class="plv-3006">35-ZSC-1025</b></a>
                </div>
                <div class="bv-1401-wrapper">
                    <a href=""  class="show-modal(16)"onclick="showModal()"><b class="gtv-1401">35-BV-1401</b></a>
                </div>
                <div class="bv-1402-wrapper">
                    <a href=""  class="show-modal(17)"onclick="showModal()"><b class="bv-1402">
                        <p class="p">35</p>
                        <p class="p">BV</p>
                        <p class="p">1402</p>
                    </b></a>
                </div>
                <div class="plv-1401-container">
                    <a href=""  class="show-modal(18)"onclick="showModal()"><b class="plv-3006">35-PLV-1401</b></a>
                </div>
                <div class="psv-1020-wrapper">
                    <a href=""  class="show-modal(19)"onclick="showModal()"><b class="plv-3006">35-PSV-1020</b></a>
                </div>
                <div class="pi-1020b-wrapper">
                    <a href=""  class="show-modal(20)"onclick="showModal()"><b class="pi-1020b">35-PI-1020B</b></a>
                </div>
                <div class="pi-1020b-wrapper">
                    <a href=""  class="show-modal(21)"onclick="showModal()"><b class="pi-1020b">35-PI-1020B</b></a>
                </div>
                <div class="bv-1002-wrapper">
                    <a href=""  class="show-modal(22)"onclick="showModal()"><b class="gtv-1401">35-BV-1002</b></a>
                </div>
                <div class="bv-1002-container">
                    <a href=""  class="show-modal(23)"onclick="showModal()"><b class="gtv-1401">35-BV-1002</b></a>
                </div>
                <div class="zs-1021-wrapper">
                    <a href=""  class="show-modal(24)"onclick="showModal()"><b class="gtv-1401">35-ZS-1021</b></a>
                </div>
                <div class="hcv-1020-wrapper">
                    <a href=""  class="show-modal(25)"onclick="showModal()"><b class="hcv-1020">35-HCV-1020</b></a>
                </div>
                <div class="bv-1002-frame">
                    <a href=""  class="show-modal(26)"onclick="showModal()"><b class="bv-10022">35-BV-1002</b></a>
                </div>
                <div class="bv-1001-wrapper">
                    <a href=""  class="show-modal(27)"onclick="showModal()"><b class="gtv-1401">35-BV-1001</b></a>
                </div>
                <div class="bv-1403-wrapper">
                    <a href=""  class="show-modal(2)8"onclick="showModal()"><b class="bv-1403">35-BV-1403</b></a>
                </div>
                <div class="plv-1402-wrapper">
                    <a href=""  class="show-modal(29)"onclick="showModal()"><b class="plv-1402">35-PLV-1402</b></a>
                </div>
                <div class="blowdown-to-atm-wrapper">
                    <a href=""  class="show-modal(30)"onclick="showModal()"><b class="blowdown-to-atm">BLOWDOWN TO ATM</b></a>
                </div>
                <div class="pi-1025-wrapper">
                    <a href=""  class="show-modal(31)"onclick="showModal()"><b class="pi-1025">35-PI-1025</b></a>
                </div>
                <div class="bv-3002-wrapper">
                    <a href=""  class="show-modal(32)"onclick="showModal()"><b class="bv-3002">35-BV-3002</b></a>
                </div>
                <div class="bv-3001-wrapper">
                    <a href=""  class="show-modal(33)"onclick="showModal()"><b class="bv-3002">35-BV-3001</b></a>
                </div>
                <div class="pt-1021-wrapper">
                    <a href=""  class="show-modal(34)"onclick="showModal()"><b class="bv-3002">35-PT-1021</b></a>
                </div>
                <div class="zs-1020-wrapper">
                    <a href=""  class="show-modal(35)"onclick="showModal()"><b class="bv-3002">35-ZS-1020</b></a>
                </div>
                <div class="plv-3003-wrapper">
                    <a href=""  class="show-modal(36)"onclick="showModal()"><b class="plv-3003">35-PLV-3003</b></a>
                </div>
                <div class="bv-3005-wrapper">
                    <a href=""  class="show-modal(37)"onclick="showModal()"><b class="plv-3003">35-BV-3005</b></a>
                </div>
                <div class="hcv-1021-wrapper">
                    <a href=""  class="show-modal(38)"onclick="showModal()"><b class="plv-3003">35-HCV-1021</b></a>
                </div>
                <div class="plv-3004-wrapper">
                    <a href=""  class="show-modal(39)"onclick="showModal()"><b class="plv-3003">35-PLV-3004</b></a>
                </div>
                <div class="bv-3006-wrapper">
                    <a href=""  class="show-modal(40)"onclick="showModal()"><b class="plv-3003">35-BV-3006</b></a>
                </div>
                <div class="frame-div">
                    <a href=""  class="show-modal(41)"onclick="showModal()"><b class="bv-10023">35-BV-1002</b></a>
                </div>
                <div class="bv-1002-wrapper1">
                    <a href=""  class="show-modal(42)"onclick="showModal()"><b class="bv-10023">35-BV-1002</b></a>
                </div>
                <div class="plv-1001-wrapper">
                    <a href=""  class="show-modal(43)"onclick="showModal()"><b class="plv-3006">35-PLV-1001</b></a>
                </div>
                <div class="pi-1020a-wrapper">
                    <a href=""  class="show-modal(44)"onclick="showModal()"><b class="pi-1020b">35-PI-1020A</b></a>
                </div>
                <div class="r-1020-wrapper">
                    <a href=""  class="show-modal(45)"onclick="showModal()"><b class="r-1020">35-R-1020</b></a>
                </div>
                <div class="vent-atm-wrapper">
                    <a href=""  class="show-modal(46)"onclick="showModal()"><b class="vent-atm">
                        <p class="p">VENT</p>
                        <p class="p">ATM</p>
                    </b></a>
                </div>
                <div class="to-sump-tank-parent">
                    <a href=""  class="show-modal(47)"onclick="showModal()"><b class="to-sump-tank">TO SUMP TANK</b></a>
                    <a href=""  class="show-modal(47)"onclick="showModal()"><b class="v-2140">35-V-2140</b></a>
                </div>
                <div class="to-sump-tank-parent">
                    <a href=""  class="show-modal(48)"onclick="showModal()"><b class="to-sump-tank">TO SUMP TANK</b></a>
                    <a href=""  class="show-modal(48)"onclick="showModal()"><b class="v-2140">35-V-2140</b></a>
                </div>
                <div class="to-pig-launcher-parent">
                    <a href=""  class="show-modal(49)"onclick="showModal()"><b class="to-pig-launcher">TO PIG LAUNCHER</b></a>
                    <a href=""  class="show-modal(49)"onclick="showModal()"><b class="l-1320">35-L-1320</b></a>
                </div>
                <div class="plv-3010-wrapper">
                    <a href=""  class="show-modal(50)"onclick="showModal()"><b class="plv-3006">35-PLV-3010</b></a>
                </div>
                <div class="plv-3009-wrapper">
                    <a href=""  class="show-modal(51)"onclick="showModal()"><b class="plv-3009">35-PLV-3009</b></a>
                </div>
                <div class="sdv-1023-wrapper">
                    <a href=""  class="show-modal(52)"onclick="showModal()"><b class="plv-3009">35-SDV-1023</b></a>
                </div>
                <div class="from-pig-launcher-parent">
                    <a href=""  class="show-modal(53)"onclick="showModal()"><b class="from-pig-launcher">FROM PIG LAUNCHER</b></a>
                    <a href=""  class="show-modal(53)"onclick="showModal()"><b class="l-13201">33-L-1320</b></a>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div id="modalContent"></div>
                {{-- <form action="{{ route('admin.submit') }}" method='post'>
                    @csrf
                    <table class="table table-bordered bordered" id ="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                                <th><a href="javascript:void(0)" class="btn btn-success btn-sm addRow">+</a></th>    
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $names = json_decode($denahFirstData -> name, true);
                                    $values = json_decode($denahFirstData -> value, true);
                                @endphp
                                @if($names && $values)
                                    @foreach($names as $key => $value)
                                    <tr>     
                                        <td>
                                            <input type="text" name="name[]" placeholder="Masukan Nama" class="form-control" value={{ $value }}>
                                        </td>
                                        <td>
                                            <input type="text" name="value[]" placeholder="Masukan Value" class="form-control" value={{ $values[$key] }}>    
                                        </td>
                                        <td><a href="javascript:void(0)" class="btn btn-danger btn-sm deleteRow">-</a></td>    
                                    </tr>    
                                    @endforeach
                                @endif
                                
                            </tbody>   
                    </table>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form> --}}
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
    <script>
        // Temukan elemen-elemen yang diperlukan
        var modal = document.getElementById('myModal');
        
        var span = document.getElementsByClassName('close')[0];

        // Fungsi untuk menampilkan modal
        function showModal(event, id) {
    event.preventDefault(); // Add this line to prevent the default behavior of the link
    modal.style.display = 'block';

    fetchDataFromDatabase(id);
}
        function fetchDataFromDatabase(id) {
            // Make an AJAX request to fetch data from the database
            // Replace the placeholder URL with your actual endpoint
            $.ajax({
                url: `/api/getDataFromDatabase/${id}`, // Example URL, adjust as needed
                method: 'GET',
                success: function (data) {
                    // Populate the modal content with data received from the server
                    populateModalWithData(data, id);
                },
                error: function (error) {
                    console.error('Error fetching data from the database', error);
                }
            });
        }

        function populateModalWithData(data, id) {
            // Your code to populate modal content with data goes here
            // Example: $("#modalContent").html(data.name + ' - ' + data.value);
            $("#modalContent").html('<p>Output: ' + id + '</p>'); // Display the identifier in the modal
        }   
         function closeModal() {
             modal.style.display = 'none';
         }
        // Tambahkan event listener ke tombol close
        span.addEventListener('click', closeModal);


        
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
