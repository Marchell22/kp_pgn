@extends('auth.app')
@section('content')
<style>
    body {
        padding-top: 40px;
    }

    body.fading {
        opacity: 0;
        transition: opacity 2s ease-in-out;
    }

    .background-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
        transition: background 2s ease-in-out;
    }

    .background-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>

<body class="hold-transition login-page">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="background-container">
                        <img src="{{ asset('frontend/assets/img/gallery/gallery-1.jpg') }}" alt="Gambar 1">
                    </div>
                    <div class="img-container d-flex justify-content-between" style="margin-top: 20px;">
                        <img src="{{ asset('img/pertamina.png') }}" alt="Gambar 1" style="margin-left:30px; ">
                        <img src="{{ asset('img/akhlak.png') }}" alt="Gambar 2" style="margin-right:30px;">
                        {{-- <img src="{{ asset('img/pgncom.png') }}" alt="Gambar 3"> --}}

                    </div>
                    <h2 class="text-center" style="margin-top: 5px; font-weight: bold;">LOGIN </h2>
                    <div class="card-body login-form">
                        <form method="POST" action="{{ route('login-proses') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" class="form-control" id="email" 
                                    required>
                            </div>
                            @error('email')
                            <small>{{ $email }}</small>
                            @enderror
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="password"
                                     required>
                            </div>
                            @error('password')
                            <small>{{ $password }}</small>
                            @enderror
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
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const backgroundContainer = document.querySelector('.background-container');
        const images = [
            '{{ asset('frontend/assets/img/gallery/gallery-2.jpg') }}',
            '{{ asset('frontend/assets/img/gallery/gallery-3.jpg') }}',
            '{{ asset('frontend/assets/img/gallery/gallery-4.jpg') }}',
            '{{ asset('frontend/assets/img/gallery/gallery-5.jpg') }}',
            '{{ asset('frontend/assets/img/gallery/gallery-1.jpg') }}',
            // '{{ asset('img/pgncom.png') }}'
        ];

        let currentIndex = 0;

        setInterval(function() {
            currentIndex = (currentIndex + 1) % images.length;
            const newImage = document.createElement('img');
            newImage.src = images[currentIndex];
            newImage.alt = 'Background Image';
            newImage.style.cssText = 'width: 100%; height: 100%; object-fit: cover; position: absolute; transition: opacity 2s ease-in-out;';
            
            // Fungsi callback yang dijalankan setelah gambar baru dimuat
            newImage.onload = function() {
                // Hapus gambar-gambar sebelumnya
                while (backgroundContainer.firstChild) {
                    backgroundContainer.removeChild(backgroundContainer.firstChild);
                }

                // Tambahkan gambar baru
                backgroundContainer.appendChild(newImage);

                // Aktifkan efek fading
                setTimeout(function() {
                    document.body.classList.remove('fading');
                }, 100);
            };

            // Aktifkan efek fading sebelum memuat gambar baru
            document.body.classList.add('fading');
        }, 3000); // Ganti setiap 3 detik
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($message = Session::get('succes'))
<script>
    Swal.fire("Akun Anda Berhasil Keluar!");
</script>
@endif

@if($message = Session::get('failed'))
<script>
    Swal.fire("Username atau Password Salah !");
</script>
@endif
</body>


@endsection
