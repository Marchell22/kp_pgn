@extends('auth.app')
@section('content')

<body class="hold-transition login-page" >
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="img-container d-flex justify-content-between" style="margin-top: 20px;">
                        <img src="{{ asset('img/pertamina.png') }}" alt="Gambar 1" style="margin-left:30px; ">
                        <img src="{{ asset('img/akhlak.png') }}" alt="Gambar 2" style="margin-right:30px;">
                        {{-- <img src="{{ asset('img/pgncom.png') }}" alt="Gambar 3"> --}}

                    </div>
                    <h2 class="text-center" style="margin-top: 5px; font-weight: bold;">LOGIN   </h2>
                    <div class="card-body">
                        <form method="POST" action="{{ route('home') }}">

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" class="form-control" id="email" name="username"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    name="password" required>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block" name="login"><a href="/beranda"
                                        style="color:#fff "><b>Login</a></b></button>
                            </div>
                            <p style="text-align: center;">
                                Kembali ke <a href="{{ route ('home')}}">Halaman Utama</a>
                            </p>
                            <p style="text-align: center; font-weight : bold;">
                                By PGNCOM</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

@endsection
