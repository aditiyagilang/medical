<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Klinik Mastrip </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logofix.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <main>
        <!-- Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <img src="{{ asset('assets/img/logo/logofix.png') }}" alt="Logo" class="overlay-logo">
                                <h2>Daftar Pasien</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Patient Data Start -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <span>Patient Details</span>
                        <h2>Data Pasien</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($pasien)
                        <form>
                            <div class="form-group">
                                <label for="nik">NIK:</label>
                                <input type="text" id="nik" name="nik" class="form-control" value="{{ $pasien->NIK }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="no_rm">No. RM:</label>
                                <input type="text" id="no_rm" name="no_rm" class="form-control" value="{{ $pasien->No_RM }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $pasien->nama }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Gender:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="laki laki" {{ $pasien->gender == 'laki laki' ? 'checked' : '' }} disabled>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="perempuan" {{ $pasien->gender == 'perempuan' ? 'checked' : '' }} disabled>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Tanggal Lahir:</label>
                                <input type="date" id="dob" name="dob" class="form-control" value="{{ $pasien->tanggal_lahir }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="phone">No Hp:</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $pasien->no_hp }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea type="text" id="alamat" name="alamat" class="form-control" readonly>{{ $pasien->alamat }}</textarea>
                            </div>
                            <label for="alamat">Riwayat:</label>
                            @if ($riwayat->isNotEmpty())
                            @foreach ($riwayat as $record)
                                <textarea type="text" id="riwayat" name="riwayat" class="form-control" readonly>{{ $record->riwayat_penyakit }}</textarea>
                            @endforeach
                        @else
                            <p>No medical history found.</p>
                        @endif

                        </form>
                        <form action="{{ route('riwayat.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
                            <input type="hidden" name="nik" value="{{ $pasien->NIK }}">
                            <input type="hidden" name="dob" value="{{ $pasien->tanggal_lahir }}">
                            <div class="form-group">
                                <label for="riwayat">Tambah Riwayat Penyakit:</label>
                                <textarea id="riwayat" name="riwayat" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Riwayat</button>
                        </form>

                    @else
                        <div class="alert alert-warning">
                            Please log in to view your details.
                        </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
        <!-- Patient Data End -->
    </main>

    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{ asset('assets/img/gallery/footer_bg.jpg') }}">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php"><img src="{{ asset('assets/img/logo/logofix.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p class="info1">E-Klinik Mastrip adalah website booking layanan klinik andalan kita<br></p>
                                        <p class="info1">Contact Us +62 822 2433 2222<br>
                                            E-Klinik.Mastrip.id<br>
                                            Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-number mb-50">
                                    <h4><span>+62 </span>8222433 2222</h4>
                                    <p>E-klinik.Mastrip.id</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('./assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('./assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('./assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('./assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('./assets/js/animated.headline.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('./assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('./assets/js/contact.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('./assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('./assets/js/plugins.js') }}"></script>
    <script src="{{ asset('./assets/js/main.js') }}"></script>

    </body>
</html>
