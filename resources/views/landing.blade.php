<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>pgn</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset ('frontend/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset ('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset ('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset ('frontend/assets/css/style.css') }}" rel="stylesheet">
    <style>
        .data-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
            margin-right: 10px;
        }

        .colon {
            margin-right: 5px;
        }

    </style>

    <!-- =======================================================
  * Template Name: Appland
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="{{ url('/') }}"><img src={{ asset ('frontend/assets/img/pertamina.png') }}></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#features">About</a></li> --}}
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    {{--  <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#faq">F.A.Q</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    <li><a href="{{ route('auth.login') }}" class="getstarted scrollto">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1 style="font-size: 36px; color: #242B52  ; font-weight: bold;">AKHLAK</h1>
                        <h2> Amanah, Kompeten, Harmonis, Loyal, Adaptif dan Kolaboratif yang merupakan Core Values dari
                            BUMN. Akhlak BUMN tersebut merupakan panduan perilaku dari setiap sumber daya manusia (SDM)
                            BUMN untuk diimplementasikan dalam perilaku keseharian dan membentuk budaya kerja di BUMN.
                        </h2>

                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="{{ asset ('frontend/assets/img/akhlak.png') }}" class="img-fluid" alt="" width="1000"
                        height="2000">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= App Features Section ======= -->
        {{-- <section id="features" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>App Features</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">
                    <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Corporis voluptates sit</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                        aliquip</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Ullamco laboris nisi</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-images"></i>
                                    <h4>Labore consequatur</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-shield"></i>
                                    <h4>Beatae veritatis</h4>
                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-atom"></i>
                                    <h4>Molestiae dolor</h4>
                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bx bx-id-card"></i>
                                    <h4>Explicabo consectetur</h4>
                                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                        data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset ('frontend/assets/img/features.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End App Features Section --> --}}
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

            </div>

            {{-- <div class="container-fluid" data-aos="fade-up">
                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="{{ asset ('frontend/assets/img/gallery/gallery-1.jpg') }}"
            class="gallery-lightbox" data-gall="gallery-carousel"><img
                src="{{ asset ('frontend/assets/img/gallery/gallery-1.jpg') }}" class="img-fluid" alt=""
                style="width: 500px; height: 300px;"></a></div>
            <div class="swiper-slide"><a href="{{ asset ('frontend/assets/img/gallery/gallery-2.jpg') }}"
                    class="gallery-lightbox" data-gall="gallery-carousel"><img
                        src="{{ asset ('frontend/assets/img/gallery/gallery-2.jpg') }}" class="img-fluid" alt=""
                        style="width: 300px; height: 300px;"></a></div>
            <div class="swiper-slide"><a href="{{ asset ('frontend/assets/img/gallery/gallery-3.jpg') }}"
                    class="gallery-lightbox" data-gall="gallery-carousel"><img
                        src="{{ asset ('frontend/assets/img/gallery/gallery-3.jpg') }}" class="img-fluid" alt=""
                        style="width: 300px; height: 300px;"></a></div>
            <div class="swiper-slide"><a href="{{ asset ('frontend/assets/img/gallery/gallery-4.jpg') }}"
                    class="gallery-lightbox" data-gall="gallery-carousel"><img
                        src="{{ asset ('frontend/assets/img/gallery/gallery-4.jpg') }}" class="img-fluid" alt=""
                        style="width: 300px; height: 300px;"></a></div>
            <div class="swiper-slide"><a href="{{ asset ('frontend/assets/img/gallery/gallery-5.jpg') }}"
                    class="gallery-lightbox" data-gall="gallery-carousel"><img
                        src="{{ asset ('frontend/assets/img/gallery/gallery-5.jpg') }}" class="img-fluid" alt=""
                        style="width: 300px; height: 300px;"></a></div>
            </div>
            <div class="swiper-pagination"></div>
            </div> --}}
            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="{{ asset ('frontend/assets/img/gallery/gallery-1.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset ('frontend/assets/img/gallery/gallery-2.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset ('frontend/assets/img/gallery/gallery-3.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset ('frontend/assets/img/gallery/gallery-4.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset ('frontend/assets/img/gallery/gallery-5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button id="prev">
                        <</button> <button id="next">>
                    </button>
                </div>
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            </div>
        </section><!-- End Gallery Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- ======= Footer ======= -->

    <div class="footer p-5" style="background: #6496f3">
        <div class="container p-9">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-md-10 footer-contact">
                    <h3 style="font-weight: bold; font-size:24px; color : white">Alamat</h3>
                    <p style=" font-size:18px; color : white">
                        Jalan 45, Desa Bandar Agung, Kecamatan Terusan Nunyai <br>
                        Kabupaten Lampung Tengah, Lampung<br>
                        34617 <br><br>
                        Phone:<br>
                        Email:<br>
                    </p>
                </div>
                {{-- <div class="col-lg-3 col-md-8 footer-contact">
                        <h3 style="font-weight: bold; font-size:24px; color : white">Jam Kerja</h3>
                        <div class="data-row" style="font-weight: bold; font-size:18px; color : white">
                            <div class="label">Senin - Kamis</div>
                            <div class="colon">:</div>
                            <div>07.30 - 16.00</div>
                        </div>
                        <div class="data-row" style="font-weight: bold; font-size:18px; color : white">
                            <div class="label">Jumat</div>
                            <div class="colon">:</div>
                            <div>07.30 - 16.30</div>
                        </div>
                    </div> --}}
                <div class="col-lg-3 col-md  footer-contact">
                    <h3 style="font-weight: bold; font-size:24px; color : white">Lokasi</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.916390853986!2d105.19829567497979!3d-4.784370395190963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f50be72aeb177%3A0xfe7370bbd611fb4!2sSta%20Terbanggi%20Besar%20PGN!5e0!3m2!1sen!2sid!4v1706667624164!5m2!1sen!2sid"
                        width="450" height="300" style="border:1;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="footer-top " style="background-color: #446ce7;">
            <p style="color: white">Copyright&copy 2023 PGN RO LAMPUNG</p>
        </div> --}}

    <div class="text-center p-1" style="background-color: #446ce7;">
        <p style="color: white">Copyright&copy 2024 PGN RO LAMPUNG</p>
    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset ('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset ('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset ('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset ('js/app.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset ('frontend/assets/js/main.js') }}"></script>

</body>

</html>
