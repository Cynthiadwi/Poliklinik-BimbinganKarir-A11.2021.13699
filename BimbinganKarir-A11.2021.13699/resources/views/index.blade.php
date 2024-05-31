<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Temu Janji Pasien</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('OnePage/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('OnePage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('OnePage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('OnePage/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="#">Poliklinik</a></h1>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
            <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-9 text-center">
                        <h1>Sistem Temu Janji Pasien - Dokter</h1>
                        <h2>Poliklinik Bimbingan Karir 2024</h2>
                    </div>
                </div>
                <div class="row icon-boxes">
                    <?php
                    $userTypes = [
                        ['route' => 'pasien.login', 'title' => 'Login Sebagai Pasien', 'description' => 'Apabila Anda adalah seorang Pasien silahkan Login terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!'],
                        ['route' => 'dokter.login', 'title' => 'Login Sebagai Dokter', 'description' => 'Apabila Anda adalah seorang Dokter silahkan Login terlebih dahulu untuk memulai melayani Pasien!'],
                    ];

                    foreach ($userTypes as $userType) {
                        echo '<div class="col-md-5 col-lg-6 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">';
                        echo '<div class="icon-box">';
                        echo '<div class="icon"><i class="ri-user-line"></i></div>';
                        echo '<h4 class="title"><a href="' . route($userType['route']) . '">' . $userType['title'] . '</a></h4>';
                        echo '<p class="description">' . $userType['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
<!-- End Hero -->

    <main id="main">
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimoni Pasien</h2>
                    <p>Para pasien yang setia</p>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "Pengalaman saya di poliklinik ini sangat positif.
                                    Proses pendaftaran cepat dan efisien, dan perawatnya sangat perhatian.
                                    Saya merasa sangat dihargai sebagai pasien."
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('OnePage/assets/img/testimonials/iphin.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Iphin</h3>
                                <h4>Semarang</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Poliklinik ini memiliki fasilitas yang lengkap dan bersih. 
                                    Pelayanannya cepat dan stafnya sangat membantu.
                                    Saya pasti akan merekomendasikan poliklinik ini kepada teman dan keluarga saya.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src= "{{ asset('OnePage/assets/img/testimonials/nayla.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Nayla</h3>
                                <h4>Bandung</h4>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "Proses pemeriksaan di poliklinik ini sangat lancar dan tidak perlu menunggu lama. 
                                    Semua staf medis sangat profesional dan penuh perhatian. 
                                    Terima kasih untuk pelayanan yang luar biasa!"
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('OnePage/assets/img/testimonials/shakaa.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Shaka</h3>
                                <h4>Yogyakarta</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Add more testimonials as needed -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container d-md-flex py-4">

            <!-- <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright 2024 <strong><span>Poliklinik BK Fatchia</span></strong>. All Rights Reserved
                </div> -->

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('OnePage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('OnePage/assets/js/main.js') }}"></script>

</body>

</html>
