@extends('layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><a href="{{ route('index') }}"> Akun</a></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Akun</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="myForm" autocomplete="off">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="name" class="form-control" id="name" name="name" 
                                            placeholder="Enter name">
                                            @error('name')
                                            <small>{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" 
                                            placeholder="Enter email">
                                             @error('email')
                                            <small>{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" name="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" 
                                            placeholder="Password">
                                             @error('password')
                                            <small>{{ $message }}</small>
                                            @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    // Ambil referensi form dan input
                                    var myForm = document.getElementById('myForm');
                                    var nameInput = document.getElementById('name');
                                    var emailInput = document.getElementById('email');
                                    var passwordInput = document.getElementById('password');
                                
                                    // Kosongkan nilai input saat halaman dimuat
                                    nameInput.value = '';
                                    emailInput.value = '';
                                    passwordInput.value = '';
                                
                                    // Optional: Fokus ke input pertama setelah nilai dihapus
                                    nameInput.focus();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>



@endsection
